<?php

namespace App\Livewire\Partials;

use App\Models\Category;
use Livewire\Component;

class Sidebar extends Component
{

    public function render()
    {
        // Lấy tất cả các danh mục hoạt động với các cột cần thiết
        $categories = Category::where('is_active', 1)
            ->select('id', 'name', 'slug')
            ->get();

        // Truyền dữ liệu vào view
        return view('livewire.partials.sidebar', [
            'categories' => $categories,
        ]);
    }
}
