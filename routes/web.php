<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Models\Usermessage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Events\UserLoggedIn;
use Illuminate\Support\Facades\Broadcast;

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

Route::get('/contact', [Controller::class, 'contact'])->name('contact')->middleware(['auth', 'verified']);

Route::get('/bienvenu sur mon site', [controller::class, 'homepage'])->name('homepage');

Route::get('/voici la page admin', [controller::class, 'admin'])->name('admin');


Route::get('/dashboard', [controller::class, 'dashboard'])->name('dashboard');


Route::post('/post/{id}/delete', [controller::class, 'destroyy'])->name('destroyy');

Route::get('/contactez moi sur whatsapp', [controller::class,'informations'])->name('informations');


Route::post('oluwatobi Trans', [controller::class, 'post'])->name('post');
// Route::get('/dashboard', [controller::class, 'post'])->name('post');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
