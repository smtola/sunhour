<?php

namespace App\Http\Controllers;

use App\Models\Admin\FileDownload;
use Illuminate\Http\Request;

class FileDownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index()
        {
                $model = 'HDJDJLD';
                $brand = 'TOTO';
                $product = 'Tolet';
                $loading = false;
                if($model === ''){
                    $loading = true;
                }

                return view('admin.models.details.downloads.index', compact('loading','model','brand','product'));
        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FileDownload $fileDownload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FileDownload $fileDownload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FileDownload $fileDownload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileDownload $fileDownload)
    {
        //
    }
}
