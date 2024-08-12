<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class TimKiem extends Component
{
    public $searchText;
    public $totalResults;

    public function mount()
    {
        // Get the search text from the query parameter
        $this->searchText = request()->input('seachtext', '');
    }

    public function render()
    {
        // Get all active products with names containing the search text
        $products = Product::where('is_active', 1)
            ->where('name', 'like', '%' . $this->searchText . '%')
            ->get();

        // Get the total number of results found
        $this->totalResults = $products->count();

        return view('livewire.tim-kiem', [
            'products' => $products,
            'searchText' => $this->searchText,
        ]);
    }
}
