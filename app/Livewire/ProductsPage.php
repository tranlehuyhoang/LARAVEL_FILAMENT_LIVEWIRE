<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsPage extends Component
{
    use WithPagination;

    public $perPage = 1; // Number of items per page

    public function render()
    {
        $products = Product::where('is_active', 1)
            ->paginate($this->perPage);

        return view('livewire.products-page', [
            'products' => $products,
        ]);
    }
}
