<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home Page')]
class HomePage extends Component
{
    public function render()
    {
        // Lấy tất cả các thương hiệu hoạt động
        $brands = Brand::where('is_active', 1)->get();

        // Lấy tất cả các danh mục hoạt động
        $categories = Category::where('is_active', 1)->get();

        // Truyền dữ liệu vào view
        return view('livewire.home-page', [
            'brands' => $brands,
            'categories' => $categories,
        ]);
    }
}
