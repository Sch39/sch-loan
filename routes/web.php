<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\LandingPage;
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

Route::get('/', LandingPage::class);
Route::get('/login', Login::class)->name('login');

Route::group(['middleware' => config('fortify.middleware', ['web'])], function () {

  // with fortify guest middleware
  Route::get('foo', function () {
    return 'Foo';
  })->middleware(['guest']);

  // with fortify auth middleware
  Route::get('bar', function () {
    return 'bar';
  })->middleware(['auth']); // fortify auth middleware

});
