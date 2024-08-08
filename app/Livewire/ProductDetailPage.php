<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;

class ProductDetailPage extends Component
{
    public $slug;
    public $product;
    public $descriptionHtml;
    // Phương thức này sẽ chạy khi component được khởi tạo
    public function mount($slug)
    {
        $this->slug = $slug;

        // Truy vấn sản phẩm dựa trên slug
        $this->product = Product::where('slug', $slug)->firstOrFail();
        $this->descriptionHtml = Str::markdown($this->product->description);
    }

    public function render()
    {
        return view('livewire.product-detail-page', [
            'product' => $this->product,
            'descriptionHtml' => $this->descriptionHtml,
        ]);
    }
}
