<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use App\Models\Patteren;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Size;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'fname' => 'Admin',
            'lname' => '1',
            'email' => 'admin@gmail.com',
            'phone' => '02734734734',
            'role' => "1",
            'password' => Hash::make("123"),
        ]);

        Size::create([
            'width' => '145',
            'profile' => '45',
            'rim_size' => '15',
            'speed' => 'H',
        ]);

        Manufacturer::create([
            'name' => 'Dunlop',
        ]);
        Patteren::create([
            'name' => 'Patteren Name',
            'manufacturer_id' => '1',
        ]);
        Product::create([
            'name' => 'Product Name',
            'manufacturer_id' => '1',
            'patteren_id' => '1',
            'fuel_efficiency' => '72',
            'wet_grip' => '60',
            'road_noise' => '70',
            'tyre_size' => '145/45 R15 H',
            'width' => '145',
            'profile' => '45',
            'rim_size' => '15',
            'speed' => 'H',
            'load_index' => '70',
            'season_type' => '0',
            'budget_tyre' => '1',
            'in_stock' => '10',
            'vat_price' => '3',
            'price' => '139',
        ]);

        ProductImage::create([
            'name'=> "11729762572.png",
            "product_id"=> "1"
        ]);
        
        
    }
}
