<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Projects\ProjectCreate;
use App\Livewire\Projects\ProjectIndex;
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

Route::get('/', Home::class)->name('home');
Route::get('/contact', Contact::class)->name('contact');

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::middleware(['auth'])->group(function () {
    Route::prefix('project')->group(function () {
        Route::get('/', ProjectIndex::class)->name('project');
        Route::get('/create', ProjectCreate::class)->name('project.create');
    });
});
