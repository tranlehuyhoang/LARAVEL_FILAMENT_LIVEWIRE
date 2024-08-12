<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            $name = Str::random(10);
            $slug = Str::slug($name);
            $image = 'category-images/' . Str::random(20) . '.png';
            $is_active = 1;

            DB::table('categories')->insert([
                'name' => $name,
                'slug' => $slug,
                'image' => $image,
                'is_active' => $is_active,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
