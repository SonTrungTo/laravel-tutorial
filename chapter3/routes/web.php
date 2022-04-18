<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MembersController;

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

Route::domain('staging.sample.loc')->group(function () {
    Route::get('/', function () {
        return 'subdomains';
    });
 });

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return 'About';
});
// Above are closures, which can't take advantage
// of route caching
// => pass controller name and method as a string

Route::get('welcome', [WelcomeController::class, 'index']);
Route::get('members/{id}', [MembersController::class, 'show'])->name('members.show');

Route::prefix('dashboard')->group(function () {
    Route::get('/', function () {
        return 'This is the dashboard';
    });
    Route::get('users', function () {
        return 'This is dashboard/users';
    });
});

Route::resource('tasks', 'App\Http\Controllers\MySampleResourceController');
