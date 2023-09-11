<?php

use App\Http\Livewire\Admin\Application as AdminApp;
use App\Http\Livewire\Admin\Dashboard as AdminDashboard;

use App\Http\Livewire\Approver\Application as ApproverApp;
use App\Http\Livewire\Approver\Dashboard as ApproverDashboard;

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
// Route::get('admin/dashboard',);


// with fortify auth middleware
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'role:admin'], function () {
  Route::redirect('/', 'dashboard');

  Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
  Route::get('/application', AdminApp::class)->name('app');
});


Route::group(['prefix' => 'approver', 'as' => 'approver.', 'middleware' => 'role:approver'], function () {
  Route::redirect('/', 'dashboard');

  Route::get('/dashboard', ApproverDashboard::class)->name('dashboard');
  Route::get('/application', ApproverApp::class)->name('app');
});
