<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => ['role:SuperAdmin']], function () {
        
        Route::resource('administration-users', 'SuperAdmin\UserAdministrationController')->names([
            'index'=>'admin.users.index',
            'create'=>'admin.users.create',
            'store'=>'admin.users.store',
            'edit'=>'admin.users.edit',
            'update'=>'admin.users.update',
            'destroy'=>'admin.users.destroy',
        ]);
    
        Route::resource('administration-users-ajax', 'SuperAdmin\Ajax\UserAdministrationController')->names([
            'index'=>'admin.users.index.ajax',
        ])->only([
            'index',
        ]);
    });

});
