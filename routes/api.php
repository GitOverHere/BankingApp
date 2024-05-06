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
Route::post('api/signin/login', 'Signin@login')->name('signin.login');

// Signup route with user information as arguments
Route::post('api/signin/signup', 'Signin@signup')->name('signin.signup');

// Password reset route with email argument
Route::post('api/signin/reset', 'Signin@reset')->name('signin.reset');

// Admin create user route with user information as arguments
Route::post('api/admin/createuser', 'Admin@createUser')->name('admin.createuser');

// Admin update account route with account ID, field, and value as arguments
Route::post('api/admin/updateuser', 'Admin@updateUser')->name('admin.updateuser');

Route::post('api/admin/deleteuser', 'Admin@deleteUser')->name('admin.deleteuser');


Route::post('api/admin/createaccount', 'Admin@CreateAccount')->name('admin.createaccount');

Route::post('api/admin/updateaccount', 'Admin@UpdateAccount')->name('admin.updateaccount');

Route::post('api/admin/deleteaccount', 'Admin@DeleteAccount')->name('admin.deleteaccount');



Route::post('api/account/insert', 'Account@insert')->name('account.insert');

Route::post('api/account/create', 'Account@create')->name('account.create');

Route::post('api/account/update', 'Account@update')->name('account.update');

Route::post('api/account/delete', 'Account@delete')->name('account.delete');

Route::post('api/account/search', 'Account@search')->name('account.search');

Route::post('api/account/get', 'Account@get')->name('account.get');

Route::post('api/account/display', 'Account@display')->name('account.display');

Route::post('api/account/apr','Account@apr')->name('account.apr');

Route::post('api/account/balance','Account@balance')->name('account.balance');


Route::post('api/user/getfields', 'User@getfields')->name('user.getfields');




// Create account route with account information as arguments
Route::post('api/user/get', 'User@get')->name('user.get');


Route::post('api/user/update', 'User@search')->name('user.search');

Route::post('api/user/get', 'User@get')->name('user.get');



// Create account route with account information as arguments
Route::post('api/user/update', 'User@update')->name('user.update');



// Create account route with account information as arguments
Route::post('api/user/delete', 'User@delete')->name('user.delete');

Route::post('api/user/search', 'User@search')->name('user.search');


// Create card route with card information as arguments
Route::post('api/card/create', 'Card@create')->name('card.create');


// Create card route with card information as arguments
Route::post('api/card/insert', 'Card@insert')->name('card.insert');



Route::post('api/card/search', 'Card@search')->name('card.search');

Route::post('api/card/update','Card@update')->name('card.update');


Route::post('api/card/delete', 'Card@delete')->name('card.delete');

Route::post('api/card/display', 'Card@display')->name('card.display');

Route::post('api/card/reportlost', 'Card@reportlost')->name('card.reportlost');

Route::post('api/card/changepin', 'Card@changepin')->name('card.changepin');



//inserts transaction
Route::post('api/transaction/create','Transaction@create')->name('transaction.create');

Route::post('api/transaction/update','Transaction@update')->name('transaction.update');

Route::post('api/transaction/delete','Transaction@delete')->name('transaction.delete');

Route::post('api/transaction/display',"Transction@display")->name('transaction.display');

Route::post('api/transaction/search',"Transction@search")->name('transaction.search');

Route::post('api/transactionhistory/export','TransactionHistory@export')->name('transactionhistory.export');

Route::post('api/statements/search','BankStatement@search'->name('transaction'));

Route::post('api/statements/download','BankStatement@download')->name();

