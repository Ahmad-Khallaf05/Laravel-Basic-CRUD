<?php
use App\Http\Controllers\MovieController;
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

Route::resource('movies', MovieController::class);

Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');

Route::get('/movies/{id}/details', [MovieController::class, 'show'])->name('movies.details');

Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');