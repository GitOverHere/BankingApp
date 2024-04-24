<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\HasApiTokens;
namespace App\Http\Controllers;



use Illuminate\Http\Request;

class Accounts extends Controller
{
	
	
	public function view(){
		
		$token = auth()::user()->currentAccessToken()
		 $sessions = DB::select('select * from tokens');
		
		
		
		if()
		
		
	}
	
	
	
  
  public function create(){
	  
	  
	  
  }
  
  public function update(){
	  
	  
	  
  }
  
  public function delete(){
	  
	  
	  
	  
	  
	  
  }
  
  
  
  
  
  
}
