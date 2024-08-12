<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ProductDetailPage extends Component
{
    public $slug;
    public $product;
    public $descriptionHtml;
    public $quantity = 1; // Thuộc tính lưu trữ số lượng
    use LivewireAlert;
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
    // Phương thức tăng số lượng
    public function incrementQuantity()
    {
        $this->quantity++;
    }
    public function decrementQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }
    public function addToCart($product_id)
    {
        $total_count = CartManagement::addItemToCartWithQuantity($product_id, $this->quantity);
        $this->dispatch('update-cart-count', [
            'total_count' => ($total_count),
        ])->to(Navbar::class);
        $this->alert('success', 'Thêm sản phẩm thành công');
    }
}
