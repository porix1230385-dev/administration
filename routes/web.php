<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard',[HomeController::class,'index'])->name('dashboard');
    Route::get('/dashboard/{locale}', [HomeController::class,'dashboard'])->name('lang.set');

});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/login2',function(){
//     return view('auth.login2');
// });

Route::get('index',function(){
    return view('index');
});
require __DIR__.'/auth.php';
