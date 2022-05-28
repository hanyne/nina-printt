<?php
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboarsComponent;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/', function () {
   // return view('welcome');
//});
route::get('/',HomeComponent::class);
route::get('/shop',ShopComponent::class);
route::get('/cart',CartComponent::class);
route::get('/checkout',CheckoutComponent::class);

//for user
Route::middleware(['auth:sanctum','verified'])->group(function () {
   route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
});
//for admin        
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function () {
   route::get('/Admin/dashboars',AdminDashboarsComponent::class)->name('admin.dashbors');
 });