<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Login route with email and password arguments
Route::post('api/signin/login', 'Signin@login');

// Signup route with user information as arguments
Route::post('api/signin/signup', 'Signin@signup');

// Password reset route with email argument
Route::post('api/signin/reset', 'Signin@reset');

// Admin create user route with user information as arguments
Route::post('api/admin/createuser', 'Admin@createUser');

// Admin update account route with account ID, field, and value as arguments
Route::post('api/admin/updateuser', 'Admin@updateUser');

Route::post('api/admin/deleteuser', 'Admin@deleteUser');


Route::post('api/admin/createaccount', 'Admin@createAccount');

Route::post('api/admin/updateaccount', 'Admin@updateAccount');

Route::post('api/admin/deleteaccount', 'Admin@deleteAccount');


Route::post('api/accounts/create', 'Accounts@create');

Route::post('api/accounts/create', 'Accounts@update');

Route::post('api/accounts/delete', 'Accounts@delete');



Route::post('api/user/getfields', 'User@getfields');


// Create account route with account information as arguments
Route::post('api/user/get', 'User@get');


// Create account route with account information as arguments
Route::post('api/user/update', 'User@update');



// Create account route with account information as arguments
Route::post('api/user/delete', 'User@delete');




// Create account route with account information as arguments
Route::post('api/account/create', 'Account@create');


Route::post('api/account/getinfo', 'Account@getinfo');


// Create account route with account information as arguments
Route::post('api/account/update', 'Account@update');


// Create account route with account information as arguments
Route::post('api/account/delete', 'Account@delete');

// Create card route with card information as arguments
Route::post('api/cards/create', 'Card@create');

Route::post('api/cards/update','Card@update');



Route::post('api/cards/delete', 'Card@delete');


Route::post('api/transaction/create','Transaction@create');

Route::post('api/transaction/update','Transaction@update');

Route::post('api/transaction/delete','Transaction@delete');

Route::post('api/transactions/export','Transaction@export');

Route::post('api/statements/download','BankStatement@download');

