<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $category_id = 13;
        $brand_id = 5;
        $images = ["product-images\/01J53BSKN7W0Z4J5AN90GMC8G7.png", "product-images\/01J53BSKNE41YXGHPSG5RAW94P.png"];

        for ($i = 0; $i < 100; $i++) {
            $name = Str::random(10);
            $slug = Str::slug($name);
            $description = Str::random(100);
            $price = mt_rand(10, 100) + (mt_rand(0, 99) / 100);
            $is_active = 1;
            $is_featured = mt_rand(0, 1);
            $in_stock = mt_rand(0, 1);
            $on_sale = mt_rand(0, 1);

            DB::table('products')->insert([
                'category_id' => $category_id,
                'brand_id' => $brand_id,
                'name' => $name,
                'slug' => $slug,
                'images' => json_encode($images),
                'description' => $description,
                'price' => $price,
                'is_active' => $is_active,
                'is_featured' => $is_featured,
                'in_stock' => $in_stock,
                'on_sale' => $on_sale,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
