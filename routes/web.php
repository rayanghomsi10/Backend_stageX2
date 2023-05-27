<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/home', [\App\Http\Controllers\Admin\FrontendController::class, 'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


/*Route::middleware(['auth', 'isAdmin'])->group(function (){
    Route::get('/dashboard', function (){
        return "Admin";
    });

});*/

Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('/private', [App\Http\Controllers\Admin\FrontendController::class, 'index'])->name('admin.index');
    Route::get('categories', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin.category.add');
    Route::post('insert-category', [App\Http\Controllers\Admin\CategoryController::class, 'insert']);
});
