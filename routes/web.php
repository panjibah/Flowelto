<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', 'FlowerController@viewAllCategories');
Route::get('/viewCategories/{categories_id}', 'FlowerController@viewCategories');
Route::get('/viewCategories/flowerDetail/{flower_id}', 'FlowerController@detailFlowers');


Route::get('/register', 'UserController@registerUser');
Route::post('/registerPost', 'AuthController@registerAuth');

Route::get('/login', 'UserController@loginUser');
Route::post('/loginPost', 'AuthController@loginAuth');








Route::get('/changePassword', function () { return view('changePassword');});
Route::get('/addNewFlower', function () { return view('addNewFlower');});
Route::get('/updateFlower', function () { return view('updateFlower');});
Route::get('/transactionHistory', function () { return view('transactionHistory');});
Route::get('/transactionHistoryDetail', function () { return view('transactionHistoryDetail');});
Route::get('/cart', function () { return view('cart');});



Route::get('/headerManager', function () { return view('headerManager');});
Route::get('/headerUser', function () { return view('headerUser');});

Route::get('/viewProductManager', function () { return view('viewProductManager');});


Route::get('/flowerDetailManager', function () { return view('flowerDetailManager');});


Route::get('/manageCategories', function () { return view('manageCategories');});
Route::get('/manageCategoriesDetail', function () { return view('manageCategoriesDetail');});
