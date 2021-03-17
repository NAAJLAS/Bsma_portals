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
/*
Route::get('/{name}', 'App\Http\Controllers\Controller@show');
    // $name = request('name');
//});
*/

Route::get('/search', function () {
    return view('search');
});

Route::get('/AddMember', function () {
    return view('AddMember');
});
Route::get('/nfc', function () {
    return view('nfc');
});

Route::get('addMember','Controller@addMemberForm');
Route::post('add_member','Controller@addMember');

Route::get('addAdmin','Controller@addAdminForm');
Route::post('add_admin','Controller@addAdmin');

Route::get('/memberProfile/{member}', 'memberController@display');
