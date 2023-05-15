<?php

use Illuminate\Support\Facades\Route;
use App\Models\Sport;
use App\Http\Controllers\SportController;
use App\Http\Controllers\FrontendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sport', function()
{
    $sport = Sport::findOrFail(1);
    dd($sport);
});
//Backend
Route::get('/sport/index', [SportController::class, 'index'])->name('sport.index');
Route::get('/sport/create',[SportController::class, 'create'])->name('sport.create');
Route::post('/sport/post', [SportController::class, 'store'])->name("sport.store");
Route::delete('/sport/{id}', [SportController::class, 'destroy'])->name("sport.delete");

//Frontend
Route::get('/frontend/sport/index', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/frontend/sport/list', [FrontendController::class, 'list'])->name('frontend.list');
Route::get('/frontend/sport/show/{id}', [FrontendController::class, 'show'])->name('frontend.show');
Route::get('/frontend/sport/search', [FrontendController::class, 'search'])->name('frontend.search');