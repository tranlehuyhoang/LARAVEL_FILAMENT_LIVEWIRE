<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductsPage extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $perPage = 2; // Number of items per page
    public $selected_categories = []; // Selected categories for filtering
    public $selected_brands = []; // Selected brands for filtering
    public function addToCart($product_id)
    {
        $total_count = CartManagement::addItemToCart($product_id);
        $this->dispatch('update-cart-count', [
            'total_count' => ($total_count),
        ])->to(Navbar::class);
        $this->alert('success', 'Thêm sản phẩm thành công');
    }
    public function render()
    {
        $query = Product::where('is_active', 1);

        // Filter products based on selected categories if any
        if (!empty($this->selected_categories)) {
            $query->whereIn('category_id', $this->selected_categories);
        }

        // Filter products based on selected brands if any
        if (!empty($this->selected_brands)) {
            $query->whereIn('brand_id', $this->selected_brands);
        }

        $products = $query->paginate($this->perPage);

        // Fetch active brands with only id, name, and slug
        $brands = Brand::where('is_active', 1)
            ->select('id', 'name', 'slug')
            ->get();

        // Fetch active categories with only id, name, and slug
        $categories = Category::where('is_active', 1)
            ->select('id', 'name', 'slug')
            ->get();

        return view('livewire.products-page', [
            'products' => $products,
            'brands' => $brands,
            'categories' => $categories,
        ]);
    }
}
