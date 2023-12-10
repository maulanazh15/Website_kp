<?php

use App\Http\Controllers\AdminBannerControllee;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminUserController;
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

Route::get('/', function () {
    //return view('home.index');
    $data = [
        'content' => 'home/home/index'
    ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/about', function(){
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/kegiatan', function(){
    $data = [
        'content' => 'home/kegiatan/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/galeri', function(){
    $data = [
        'content' => 'home/galeri/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/contacts', function(){
    $data = [
        'content' => 'home/contacts/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/login', function(){
    $data = [
        'content' => 'home/auth/login'
    ];
    return view('home.layouts.wrapper', $data);
});


// === ADMIN===

Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', function () {
        $data = [
            'content' => 'admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper', $data);
    });

    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/user', AdminUserController::class);


});
