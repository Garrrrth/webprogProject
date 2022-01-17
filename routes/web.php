<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;
use App\Models\User;

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
Route::get('/vfurniture', [GuestController::class, 'viewfurniture'])->name('viewfurniture');

//button search
Route::post('/get',[FurnitureController::class, 'search']);

Route::middleware('guest')->group(function () {
    Route::get('/login', [GuestController::class, 'login'])->name('login');
    Route::post('/login', [GuestController::class, 'logon']);
    Route::get('/register', [GuestController::class, 'register'])->name('register');
    Route::post('/register', [GuestController::class, 'userregister']);
});

//button profile
Route::middleware('auth')->group(function () {
    Route::get('/upProfile', [UserController::class, 'update'])->name('update');
    Route::post('/upProfile', [MemberController::class, 'Update']);
    Route::get('/logout', [GuestController::class, 'logout']);
    Route::get('/detail/{id}', [UserController::class, 'detail'])->name('detail');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/cart', [UserController::class, 'showfurn']);
    Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');
    Route::post('/bfurniture/{Fur_id}/{user_id}', [UserController::class, 'buyfurn']);
    Route::post('/ufurniture/{id}/min', [UserController::class, 'minquantity']);
    Route::post('/ufurniture/{id}/plus', [UserController::class, 'plusquantity']);
    Route::post('/checkout', [UserController::class, 'check']);
    Route::post('/bayar/{id}', [UserController::class, 'bayar']);
});

//transaction
Route::get('/transactionHistory',[UserController::class,'transactionHistory'])->name('transactionHistory');



//admin
Route::middleware('auth')->group(function () {
    Route::get('/addfurniture', [UserController::class, 'addfurniture'])->name('addfurniture');
    Route::get('updatefurniture/{id}', [UserController::class, 'updatefurniture'])->name('updatefurniture');
    Route::post('/addfurniture', [UserController::class, 'confirmadd']);
    Route::post('updatefurniture/{id}', [UserController::class, 'updated']);
    Route::delete('/delete/{id}', [UserController::class, 'delete']);
});
