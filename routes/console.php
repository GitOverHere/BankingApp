<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


/*
Artisan::command('addapr', function(){
	//adds aop
	$this->Admin::addapr();
	//for each account count the number of transactions betweent the start of the month and the end
	// of the month. Note the state of the balance at the start of the month. For this bank we will be compounding
	// interest daily/monthly this can be configured in admin panel. 
	// if compounded daily note the balance and add (balance*apr*timescale) to it 
	// timescale =  1/365
	// do this every day
	// if compounded monthly note the balance  and add (balance*apr*timescale) to it 
	// timescale = 1/12
	
	
	
	
})->purpose("Add calculated apr to all accounts on a monthly basis.")

Artisan::command('createstatement', function()){
	$this->comment(Inspiring::quote());
	//For each account, create a pdf showing every transction, balance, and interest from the start of the month to
	//the end of the month. Intrest is a a transaction that credits your account.
	
})->purpose("Create monthly statements for all accounts on a monthly basis.")
*/