<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Show login page
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Handle login request
     */
   public function login(Request $request)
{
    $credentials = $request->validate([
        'name' => 'required|string',
        'password' => 'required',
    ]);

    $loginAttemptsKey = 'login_attempts_' . $request->ip();
    $banKey = 'login_ban_' . $request->ip();

    if (Cache::has($banKey)) {
        $remainingTime = Cache::get($banKey) - now()->timestamp;
        return redirect()->route('login')->with('error', "Too many failed attempts. Try again in {$remainingTime} seconds.");
    }

    try {
        if (!$token = JWTAuth::attempt($credentials)) {
            $attempts = Cache::get($loginAttemptsKey, 0);
            $attempts++;
            Cache::put($loginAttemptsKey, $attempts, 60);
            if ($attempts >= 3) {
                Cache::put($banKey, now()->addMinute()->timestamp, 60);
                Cache::forget($loginAttemptsKey);
                return redirect()->route('login')->with('error', 'Too many failed attempts. Account locked for 1 minute.');
            }
            return redirect()->route('login')->with('error', 'Invalid name or password');
        }

        $user = JWTAuth::user();
        if ($user->role !== 'admin' || $user->status !== 'active') {
            JWTAuth::invalidate($token);
            return redirect()->route('login')->with('error', 'Unauthorized access or inactive account');
        }

        $request->session()->regenerate();
        session(['jwt' => $token]);

        return redirect()->route('dashboard.index')->with('success', 'Login successful');

    } catch (JWTException $e) {
        \Log::error('Login JWT error', ['message' => $e->getMessage()]);
        return redirect()->route('login')->with('error', 'Could not create token: ' . $e->getMessage());
    }
}

    public function showRegisterForm()
    {
        return view('auth.register');
    }
   /**
     * Handle user registration and set JWT token in session.
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'admin',
                'status' => 'active',
            ]);

            $token = JWTAuth::fromUser($user);

            if (!$token) {
                throw new JWTException('Could not generate token.');
            }

            // Store token in cookie instead of session
            return redirect()->route('dashboard.index')
                ->with('success', 'Registration successful! You are now logged in.')
                ->cookie('jwt', $token, 60); // 60 minutes expiration

        } catch (JWTException $e) {
            return redirect()->back()
                ->with('error', 'Registration failed: Could not create token. ' . $e->getMessage())
                ->withInput();
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Registration failed: ' . $e->getMessage())
                ->withInput();
        }
    }
    /**
     * Handle logout request
     */
    public function logout(Request $request)
    {
        try {
            JWTAuth::invalidate(JWTAuth::getToken());
            return redirect()->route('login')
                ->with('success', 'Logged out successfully')
                ->withSession(session()->forget('jwt'));
        } catch (JWTException $e) {
            return redirect()->route('login')->with('error', 'Failed to logout: ' . $e->getMessage());
        }
    }
}
