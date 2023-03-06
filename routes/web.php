<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\HomeController;
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


// Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
// Route::get('/dashboard', [DashboardController::class, 'index']);

Auth::routes();


Route::group(
    ['middleware' => ['auth','AdminPanelAccess']],
    function() {

        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/dashboard', [DashboardController::class, 'index']);
        // Route::get('/', 'HomeController@index')->name('home');

        Route::group(['prefix'=>"admin",'as' => 'admin.','namespace' => 'App\Http\Controllers\Admin'], function () {

            Route::resource('/users', 'UserController');
            Route::resource('/roles', 'RoleController');
            Route::resource('/permissions', 'PermissionController')->except(['show']);
        });

        //Route::group(['prefix'=>"pages",'as' => 'pages.','namespace' => 'App\Http\Controllers\MasterData','middleware' => ['auth','AdminPanelAccess']], function () {
        Route::group(['prefix'=>"pages",'as' => 'pages.','namespace' => 'App\Http\Controllers\MasterData'], function () {

            //Route::get('/', 'HomeController@index')->name('home');
            Route::resource('/menu', 'MenuController');
            Route::resource('/users', 'UserController');

        });
});





