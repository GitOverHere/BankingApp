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


Route::get('/signin', function () {
    return view('signin');
})->name('signin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/adminsignin', function(){
    return view('adminsignin');
})->name('admin.signin');

Route::get('/admindashboard', function(){
    return view('admindashboard');
})->name('admin.dashboard');



Route::get('/admindashboard/insert/user', function(){
    return view('insertuser');
})->name('admin.user.insert');


Route::get('/admindashboard/update/user', function(){
    return view('updateuser');
})->name('admin.user.update');




Route::get('/admindashboard/delete/user', function(){
    return view('deleteuser');
})->name('admin.user.delete');



Route::get('/admindashboard/search/user', function(){
    return view('searchuser');
})->name('admin.user.search');





Route::get('/admindashboard/insert/account', function(){
    return view('insertaccount');
})->name('admin.account.insert');

Route::get('/admindashboard/update/account', function(){
    return view('updateaccount');
})->name('admin.account.update');

Route::get('/admindashboard/delete/account', function(){
    return view('deleteaccount');
})->name('admin.account.delete');

Route::get('/admindashboard/search/account', function(){
    return view('searchaccount');
})->name('admin.account.search');

Route::get('/admindashboard/insert/card', function(){
    return view('insertcard');
})->name('admin.card.insert');

Route::get('/admindashboard/update/card', function(){
    return view('updatecard');
})->name('admin.card.update');

Route::get('/admindashboard/delete/card', function(){
    return view('deletecard');
})->name('admin.card.delete');

Route::get('/admindashboard/search/card', function(){
    return view('searchcard');
})->name('admin.card.search');

Route::get('/admindashboard/insert/transaction', function(){
    return view('inserttransaction');
})->name('admin.transaction.insert');

Route::get('/admindashboard/update/transaction', function(){
    return view('updatetransaction');
})->name('admin.transaction.update');

Route::get('/admindashboard/delete/transaction', function(){
    return view('deletetransaction');
})->name('admin.transaction.delete');

Route::get('/admindashboard/search/transaction', function(){
    return view('searchtransaction');
})->name('admin.transaction.search');

Route::get('/admindashboard/export/transactions', function(){
    return view('exporttransactions');
})->name('admin.transactions.export');

Route::get('/admindashboard/regenerate/statement', function(){
    return view('regeneratestatement');
})->name('admin.statement.regenerate');
