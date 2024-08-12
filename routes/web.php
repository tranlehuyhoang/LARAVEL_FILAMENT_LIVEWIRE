<?php

use App\Livewire\Auth\ForgotPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
use App\Livewire\BanBaoGiaThuMuaLinhKienCu;
use App\Livewire\CanclePage;
use App\Livewire\CartPage;
use App\Livewire\CategoriesPage;
use App\Livewire\CheckoutPage;
use App\Livewire\ChinhSachBaoHanh;
use App\Livewire\ChiTietSanPham;
use App\Livewire\DanhMucSanPham;
use App\Livewire\GioHang;
use App\Livewire\GioiThieu;
use App\Livewire\HomePage;
use App\Livewire\HuongDanThanhToan;
use App\Livewire\LienHe;
use App\Livewire\MyOrderDetailPage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\SanPham;
use App\Livewire\SuccessPage;
use App\Livewire\TimKiem;
use App\Livewire\TinTuc;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/gioi-thieu', GioiThieu::class);
Route::get('/san-pham', SanPham::class);
Route::get('/chinh-sach/ban-bao-gia-thu-mua-linh-kien-cu', BanBaoGiaThuMuaLinhKienCu::class);
Route::get('/chinh-sach/chinh-sach-bao-hanh', ChinhSachBaoHanh::class);
Route::get('/chinh-sach/huong-dan-thanh-toan', HuongDanThanhToan::class);
Route::get('/tin-tuc', TinTuc::class);
Route::get('/lien-he', LienHe::class);
Route::get('/gio-hang', GioHang::class);
Route::get('/san-pham/{category}', DanhMucSanPham::class);
Route::get('/san-pham/{category}/{slug}', ChiTietSanPham::class);
Route::get('/tim-kiem', TimKiem::class);




Route::get('/categories', CategoriesPage::class);
Route::get('/products', ProductsPage::class);
Route::get('/products/{slug}', ProductDetailPage::class);
Route::get('/checkout', CheckoutPage::class);
Route::get('/my-orders', MyOrdersPage::class);
Route::get('/my-orders/{orders}', MyOrderDetailPage::class);

Route::get('/reset', ResetPasswordPage::class);
Route::get('/register', RegisterPage::class);
Route::get('/login', LoginPage::class);
Route::get('/forgot', ForgotPage::class);

Route::get('/success', SuccessPage::class);
Route::get('/cancle', CanclePage::class);
