<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/
//Giriş Yapmışsa tekrar giriş sayfasına yönlendirmez.
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function (){
Route::get('giris','Back\AuthController@login')->name('login');
Route::post('giris','Back\AuthController@loginPost')->name('login.post');
});

//grup olarak yaptık.
Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function (){
    Route::get('panel','Back\Dashboard@index')->name('dashboard');

    //Controller kısmını --resource şeklinde oluşturursak tüm işlemleri route yapısını otomatik oluşturuyor.
    Route::resource('makaleler','Back\ArticleController');
    Route::get('cikis','Back\AuthController@logout')->name('logout');
});






/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'Front\Homepage@index')->name('homepage');
Route::get('sayfa','Front\Homepage@index');
Route::get('/kategori/{category}','front\homepage@category')->name('category');
Route::get('/{category}/{slug}','Front\Homepage@single')->name('single');
Route::get('/{sayfa}','Front\Homepage@page')->name('page');


