<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Signin;
use App\Http\Controllers\Account;



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

// Authentication routes
Route::post('api/signin/login', 'Signin@login')->name('signin.login');
Route::post('api/signin/signup', 'Signin@signup')->name('signin.signup');
Route::post('api/signin/reset', 'Signin@reset')->name('signin.reset');

// Admin routes
Route::post('api/admin/createuser', 'Admin@createUser')->name('admin.createuser');
Route::post('api/admin/updateuser', 'Admin@updateUser')->name('admin.updateuser');
Route::post('api/admin/deleteuser', 'Admin@deleteUser')->name('admin.deleteuser');
Route::post('api/admin/createaccount', 'Admin@createAccount')->name('admin.createaccount');
Route::post('api/admin/updateaccount', 'Admin@updateAccount')->name('admin.updateaccount');
Route::post('api/admin/deleteaccount', 'Admin@deleteAccount')->name('admin.deleteaccount');

// Account routes
Route::post('api/account/insert', 'Account@insert')->name('account.insert');
Route::post('api/account/create', 'Account@create')->name('account.create');
Route::post('api/account/update', 'Account@update')->name('account.update');
Route::post('api/account/delete', 'Account@delete')->name('account.delete');
Route::post('api/account/search', 'Account@search')->name('account.search');
Route::post('api/account/get', 'Account@get')->name('account.get');
Route::post('api/account/display', 'Account@display')->name('account.display');
Route::post('api/account/apr', 'Account@apr')->name('account.apr');
Route::post('api/account/balance', 'Account@balance')->name('account.balance');

// User routes
Route::post('api/user/getfields', 'User@getfields')->name('user.getfields');
Route::post('api/user/get', 'User@get')->name('user.get');
Route::post('api/user/update', 'User@update')->name('user.update');
Route::post('api/user/delete', 'User@delete')->name('user.delete');
Route::post('api/user/search', 'User@search')->name('user.search');

// Card routes
Route::post('api/card/create', 'Card@create')->name('card.create');
Route::post('api/card/insert', 'Card@insert')->name('card.insert');
Route::post('api/card/search', 'Card@search')->name('card.search');
Route::post('api/card/update', 'Card@update')->name('card.update');
Route::post('api/card/delete', 'Card@delete')->name('card.delete');
Route::post('api/card/display', 'Card@display')->name('card.display');
Route::post('api/card/reportlost', 'Card@reportlost')->name('card.reportlost');
Route::post('api/card/changepin', 'Card@changepin')->name('card.changepin');

// Transaction routes
Route::post('api/transaction/create', 'Transaction@create')->name('transaction.create');
Route::post('api/transaction/update', 'Transaction@update')->name('transaction.update');
Route::post('api/transaction/delete', 'Transaction@delete')->name('transaction.delete');
Route::post('api/transaction/display', 'Transaction@display')->name('transaction.display');
Route::post('api/transaction/search', 'Transaction@search')->name('transaction.search');

// Transaction history
Route::post('api/transactionhistory/export', 'TransactionHistory@export')->name('transactionhistory.export');

// Bank statement routes
Route::post('api/statements/search', 'BankStatement@search')->name('bankstatement.search');
Route::post('api/statements/download', 'BankStatement@download')->name('bankstatement.download');
?>
