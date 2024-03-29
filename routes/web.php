<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/index',[\App\Http\Controllers\YonetimController::class,'index'])->name("index");
Route::get('/musteri-ekle',[\App\Http\Controllers\YonetimController::class,'musteriEkle'])->name("musteri-ekle");
Route::post('/musteri-ekle-post',[\App\Http\Controllers\YonetimController::class,'musteriEklePost'])->name("musteri-ekle-post");
Route::get('/musteri-liste',[\App\Http\Controllers\YonetimController::class,'musteriListe'])->name("musteri-liste");
Route::get('/musteri-duzenle/{id}',[\App\Http\Controllers\YonetimController::class,'musteriDuzenle'])->name("musteri-duzenle");
Route::post('/musteri-duzenle-post/{id}',[\App\Http\Controllers\YonetimController::class,'musteriDuzenlePost'])->name("musteri-duzenle-post");
Route::get('/musteri-sil/{id}',[\App\Http\Controllers\YonetimController::class,'musteriSil'])->name("musteri-sil");
