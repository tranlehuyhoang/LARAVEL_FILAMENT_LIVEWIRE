<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class SanPham extends Component
{
    use WithPagination;

    public function render()
    {
        // Lấy tất cả sản phẩm có is_active = 1 và phân trang, mỗi trang 1 sản phẩm
        $products = Product::where('is_active', 1)
            ->with('category')  // Eager load the category
            ->paginate(16);

        return view('livewire.san-pham', [
            'products' => $products,
        ]);
    }
}
