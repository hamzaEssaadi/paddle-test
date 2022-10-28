<?php

use Illuminate\Http\Request;
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
Route::get('/user/subscribe', function (Request $request) {
    $user=\App\User::query()->first();
    return view('subsribtion', [ 'payLink' => $user->charge(12.99, 'Action Figure')]);
});
