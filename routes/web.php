<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



// Route untuk bagian halaman user
Route::get('/', [HalamanController::class, 'home']);
Route::get('/welcome', [HalamanController::class, 'welcome']);
Route::get('/about', [HalamanController::class, 'about']);
Route::get('/booking', [HalamanController::class, 'booking'])->name('booking');
Route::get('/history', [HalamanController::class, 'history']);
Route::get('/sewa', [HalamanController::class, 'sewa']);
Route::get('/testimonial', [HalamanController::class, 'testimonial']);
Route::get('/contact', [HalamanController::class, 'contact']);
Route::get('/detail', [HalamanController::class, 'detail']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Route untuk penyewaan
Route::get('/sewa/{id}', [SewaController::class, 'create'])->name('sewa.create');
Route::post('/sewa', [SewaController::class, 'store'])->name('sewa.store');
Route::post('/sewa/store', [SewaController::class, 'store'])->name('sewa.store');
Route::post('/pembayaran', [SewaController::class, 'pembayaran'])->name('pembayaran');
Route::get('/history', [SewaController::class, 'history'])->name('history')->middleware('auth');
Route::match(['get', 'post'], '/sewa', [SewaController::class, 'index'])->name('sewa.index');

// Route untuk sesi login dan registrasi akun
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HalamanController::class, 'index'])->name('home');
    Route::get('/myprofile', [HalamanController::class, 'myprofile'])->name('myprofile');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HalamanController::class, 'adminHome'])->name('admin/home');
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/sewa', [SewaController::class, 'index'])->name('sewa.index');
    Route::get('/admin/contact', [ContactController::class, 'contact'])->name('admin/contact');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');
    Route::patch('/sewa/{id}/status-barang', [SewaController::class, 'updateStatusBarang'])->name('sewa.updateStatusBarang');
});
