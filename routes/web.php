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

Route::get('/user',function (){
    if(\App\Models\User::query()->count()==0)
    \App\Models\User::query()->create([
        'name'=>'hamza',
        'email'=>'hamza@gmail.com',
        'password'=>bcrypt('12345678')
    ]);
});

Route::get('/subscribe', function (Request $request) {
    $user=\App\Models\User::query()->first();
    return view('subsribtion', [ 'payLink' => $user->charge(12.99, 'Action Figure')]);
});

Route::get('/web-hook',function (){})->name('cashier.webhook');
