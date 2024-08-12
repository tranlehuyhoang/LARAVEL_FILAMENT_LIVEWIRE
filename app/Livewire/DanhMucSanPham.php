<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class DanhMucSanPham extends Component
{
    use WithPagination;

    public $categorySlug;
    public $categoryName;


    public function mount($category)
    {
        $this->categorySlug = $category;

        // Find category by slug
        $category = Category::where('slug', $this->categorySlug)->first();

        if ($category) {
            $this->categoryName = $category->name;
        } else {
            abort(404, 'Category not found');
        }
    }

    public function render()
    {
        // Get all active products belonging to the selected category
        $products = Product::where('is_active', 1)
            ->whereHas('category', function ($query) {
                $query->where('slug', $this->categorySlug);
            })
            ->paginate(16);

        return view('livewire.danh-muc-san-pham', [
            'products' => $products,
            'categoryName' => $this->categoryName,
        ]);
    }
}
