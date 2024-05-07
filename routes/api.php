<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Signin;
use App\Http\Controllers\AccountController; // Assuming your Account controller is named AccountController
use App\Http\Controllers\UserController; // Assuming your User controller is named UserController
use App\Http\Controllers\CardController; // Assuming your Card controller is named CardController
use App\Http\Controllers\TransactionController; // Assuming your Transaction controller is named TransactionController
use App\Http\Controllers\TransactionHistoryController; // Assuming your TransactionHistory controller is named TransactionHistoryController
use App\Http\Controllers\BankStatementController; // Assuming your BankStatement controller is named BankStatementController

/*
|--------------------------------------------------------------------------
| api Routes
|--------------------------------------------------------------------------
|
| Here is where you can register api routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your api!
|
*/

Route::middleware('auth:sanctum')->post('/signin', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->post('admin', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/account', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/card', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/transaction', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/transactionhistory', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/statements', function (Request $request) {
    return $request->user();
});






// Authentication routes
Route::post('signin/login', [Signin::class, 'login'])->name('signin.login');
Route::post('signin/signup', [Signin::class, 'signup'])->name('signin.signup');
Route::post('signin/reset', [Signin::class, 'reset'])->name('signin.reset');

// Admin routes
Route::post('admin/createuser', 'Admin@createUser')->name('createuser');
Route::post('admin/updateuser', 'Admin@updateUser')->name('admin.updateuser');
Route::post('admin/deleteuser', 'Admin@deleteUser')->name('admin.deleteuser');
Route::post('admin/createaccount', 'Admin@createAccount')->name('admin.createaccount');
Route::post('admin/updateaccount', 'Admin@updateAccount')->name('admin.updateaccount');
Route::post('admin/deleteaccount', 'Admin@deleteAccount')->name('admin.deleteaccount');

// Account routes
Route::post('account/insert', [AccountController::class, 'insert'])->name('account.insert');
Route::post('account/create', [AccountController::class, 'create'])->name('account.create');
Route::post('account/update', [AccountController::class, 'update'])->name('account.update');
Route::post('account/delete', [AccountController::class, 'delete'])->name('account.delete');
Route::post('account/search', [AccountController::class, 'search'])->name('account.search');
Route::post('account/get', [AccountController::class, 'get'])->name('account.get');
Route::post('account/display', [AccountController::class, 'display'])->name('account.display');
Route::post('account/apr', [AccountController::class, 'apr'])->name('account.apr');
Route::post('account/balance', [AccountController::class, 'balance'])->name('account.balance');

// User routes
Route::post('user/getfields', [UserController::class, 'getfields'])->name('user.getfields');
Route::post('user/get', [UserController::class, 'get'])->name('user.get');
Route::post('user/update', [UserController::class, 'update'])->name('user.update');
Route::post('user/delete', [UserController::class, 'delete'])->name('user.delete');
Route::post('user/search', [UserController::class, 'search'])->name('user.search');

// Card routes
Route::post('card/create', [CardController::class, 'create'])->name('card.create');
Route::post('card/insert', [CardController::class, 'insert'])->name('card.insert');
Route::post('card/search', [CardController::class, 'search'])->name('card.search');
Route::post('card/update', [CardController::class, 'update'])->name('card.update');
Route::post('card/delete', [CardController::class, 'delete'])->name('card.delete');
Route::post('card/display', [CardController::class, 'display'])->name('card.display');
Route::post('card/reportlost', [CardController::class, 'reportlost'])->name('card.reportlost');
Route::post('card/changepin', [CardController::class, 'changepin'])->name('card.changepin');

// Transaction routes
Route::post('transaction/create', [TransactionController::class, 'create'])->name('transaction.create');
Route::post('transaction/update', [TransactionController::class, 'update'])->name('transaction.update');
Route::post('transaction/delete', [TransactionController::class, 'delete'])->name('transaction.delete');
Route::post('transaction/display', [TransactionController::class, 'display'])->name('transaction.display');
Route::post('transaction/search', [TransactionController::class, 'search'])->name('transaction.search');

// Transaction history
Route::post('transactionhistory/export', [TransactionHistoryController::class, 'export'])->name('transactionhistory.export');

// Bank statement routes
Route::post('statements/search', [BankStatementController::class, 'search'])->name('bankstatement.search');
Route::post('statements/download', [BankStatementController::class, 'download'])->name('bankstatement.download');
