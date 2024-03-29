<?php

use App\Livewire\ForumsPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\HomePage;

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


Route::get('/', HomePage::class);
Route::get('/forums', ForumsPage::class);
Route::get('/profile', ForumsPage::class);