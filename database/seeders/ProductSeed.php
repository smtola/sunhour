<?php

namespace Database\Seeders;

use App\Models\Admin\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeed extends Seeder
{
    /**
     * Generate a unique encoded ID from an integer.
     */
    private function encodeIdToString($id, $length = 10)
    {
        $id = (int)$id;
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $saltLength = $length - strlen((string)$id) - 2;
        $salt = '';
        for ($i = 0; $i < max(4, $saltLength); $i++) {
            $salt .= $characters[rand(0, strlen($characters) - 1)];
        }
        $combined = $salt . '-' . $id;
        return base64_encode($combined);
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [];
        for ($i = 1; $i <= 18; $i++) {
            $products[] = [
                "uuid" => $this->encodeIdToString($i), // Generate unique ID
                "brand_id" => 'bXRMSTQ3OC0y',
                "name" => match ($i) {
                    1 => "Toilet",
                    2 => "Neorest",
                    3 => "Washlet/Washlet+",
                    4 => "Ecowasher",
                    5 => "One Piece Toilet",
                    6 => "Close-Coupled Toilets",
                    7 => "Wall Hung Toilet",
                    8 => "Concealed Tank",
                    9 => "Bidet",
                    10 => "Console Lavatories",
                    11 => "Seft Rimming Lavatories",
                    12 => "Semi Recessed Lavatories",
                    13 => "Under Counter Lavatories",
                    14 => "Wall Hung Lavatories",
                    15 => "Flotation Hub",
                    16 => "Pearl Acrylic Bathtub",
                    17 => "Acrylic Bathtub",
                    18 => "Faucet",
                }
            ];
        }

        DB::table('products')->insert($products);
    }
}
