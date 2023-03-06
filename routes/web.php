<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'index'])->name('test');
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
// Route::get('/dashboard', [DashboardController::class, 'index']);

Auth::routes();


Route::group(
    ['middleware' => ['auth', 'AdminPanelAccess']],
    function () {

        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::group(['prefix' => "pages", 'as' => 'pages.', 'namespace' => 'App\Http\Controllers', 'middleware' => ['auth', 'AdminPanelAccess']], function () {

            Route::resource('/menu', 'MenuController');
            Route::resource('/users', 'UserController');
            Route::resource('/roles', 'RoleController');
            Route::resource('/permissions', 'PermissionController')->except(['show']);

            Route::resource('/product_types', 'ProductTypeController');
            Route::resource('/products', 'ProductController');
            Route::resource('/customers', 'CustomerController');
            Route::resource('/invoices', 'InvoiceController');
            Route::resource('/payments', 'PaymentController');



        });
    });





