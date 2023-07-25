<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TotalController;
use App\Http\Controllers\DataasetController;

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

Route::get('/datakategori', function () {
    return view('layouts.totalaset', [
        'active' => 'datakategori'
    ]);
});


Route::get('/datakategori', [TotalController::class, 'index'])->name('datakategori');

Route::get('/namakategori', [DataasetController::class, 'index2'])->name('namakategori');

Route::get('/namaaset', [DataasetController::class, 'namaaset'])->name('namaaset');

Route::get('/tambahaset', [DataasetController::class, 'tambahaset'])->name('tambahaset');

Route::get('/Tambah', [TotalController::class, 'index3'])->name('Tambah');

Route::post('/insertdata', [TotalController::class, 'insertdata'])->name('insertdata');

Route::get('/tampilkategori/{id}', [TotalController::class, 'tampilkategori'])->name('tampilkategori');

Route::post('/updatekategori/{id}', [TotalController::class, 'updatekategori'])->name('updatekategori');

Route::get('/deletekategori/{id}', [TotalController::class, 'deletekategori'])->name('deletekategori');

Route::post('/insertaset', [DataasetController::class, 'insertaset'])->name('insertaset');

Route::get('/tampilaset/{id}', [DataasetController::class, 'tampilaset'])->name('tampilaset');

Route::post('/updateaset/{id}', [DataasetController::class, 'updateaset'])->name('updateaset');

Route::get('/deleteaset/{id}', [DataasetController::class, 'deleteaset'])->name('deleteaset');