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
    return view('index');
});
Route::get('/', [App\Http\Controllers\StartController::class, 'index'])->name('index');
Route::get('/rules', [App\Http\Controllers\RulesController::class, 'index'])->name('rules');
Route::resource('/character', \App\Http\Controllers\Character\CharacterController::class)->names([
    'create' => 'character.create',
    'store' => 'character.store',
    'index' => 'character.index'
]);
Route::resource('/whitelisting', \App\Http\Controllers\Whitelist\WhitelistController::class)->names([
    'create' => 'whitelisting.create',
    'store' => 'whitelisting.store',
    'index' => 'whitelisting.index',
    'show' => 'whitelisting.show',
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/whitelisting', [App\Http\Controllers\Admin\WhitelistController::class, 'index'])->name('admin.whitelist');
Route::resource('/admin/question', \App\Http\Controllers\Admin\Whitelist\QuestionController::class)->names([
    'create' => 'admin.question.create',
    'store' => 'admin.question.store',
    'index' => 'admin.question.index'
]);
Route::resource('/admin/whitelist', \App\Http\Controllers\Admin\Whitelist\WhitelistController::class)->names([
    'create' => 'admin.whitelist.create',
    'store' => 'admin.whitelist.store',
    'index' => 'admin.whitelist.index',
    'show' => 'admin.whitelist.show',
]);
Route::resource('/admin/character', \App\Http\Controllers\Admin\Whitelist\CharacterController::class)->names([
    'create' => 'admin.character.create',
    'store' => 'admin.character.store',
    'index' => 'admin.character.index',
    'show' => 'admin.character.show',
]);
Route::resource('/admin/user', \App\Http\Controllers\Admin\User\UserController::class)->names([
    'create' => 'admin.user.create',
    'store' => 'admin.user.store',
    'index' => 'admin.user.index',
    'show' => 'admin.user.show',
    'edit' => 'admin.user.edit',
    'destroy' => 'admin.user.destroy',
]);
Route::resource('/admin/roles', \App\Http\Controllers\Admin\Roles\RolesController::class)->names([
    'store' => 'admin.roles.store',
    'index' => 'admin.roles.index',
]);
Route::post('admin/user/password_reset/{id}','Admin\User\UserPasswordResetController@update')->name('admin.user.password_reset');
