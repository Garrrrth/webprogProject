<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

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

//button dari front page
Route::get('/', [GuestController::class, 'home'])->name('home');
Route::get('/home', [GuestController::class, 'home'])->name('home');
Route::get('/login', [GuestController::class, 'login'])->name('login');
Route::post('/login', [GuestController::class, 'logon']);
Route::get('/logout', [GuestController::class, 'logout']);
Route::get('/register', [GuestController::class, 'register'])->name('register');
Route::post('/register',[GuestController::class, 'userregister']);
Route::get('/profile',[UserController::class,'profile'])->name('profile');
Route::get('/vfurniture', [GuestController::class, 'viewfurniture'])->name('viewfurniture');
Route::get('/cart', [UserController::class, 'cart'])->name('cart');
Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');


//button dalem cart/transaksi

Route::get('/detail/{id}', [UserController::class, 'detail'])->name('detail');
//Route::post('/bfurniture/{id}{id}(id)', [UserController::class, 'buyfurn']);

//button profile

Route::get('/upProfile', [UserController::class, 'update'])->name('update');
Route::post('/upProfile', [MemberController::class, 'Update']);

//admin

Route::get('/addfurniture', [UserController::class,'addfurniture'])->name('addfurniture');
Route::get('/updatefurniture', [UserController::class,'updatefurniture'])->name('updatefurniture');