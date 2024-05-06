<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\HasApiTokens;

class Card extends Controller
{


    public function insert(Request $request){
        create($request);

    }


    public function create(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'id' => 'required',
            'accountnumber' => 'required',
            'name' => 'required',
            'cardnumber' => 'required',
            'expiration' => 'required',
            'cvc' => 'required',
            'pin' => 'required',
        ]);

        // Retrieve input data
        $id = $request->input("id");
        $accountnumber = $request->input("accountnumber");
        $name = $request->input("name");
        $cardnumber = $request->input("cardnumber");
        $expiration = $request->input("expiration");
        $cvc = $request->input('cvc');
        $pin = $request->input('pin');
        $createdate = now();
        $updatedate = $createdate;

        // Insert data into the database
        DB::table('cards')->insert([
            'id' => $id,
            'accountnumber' => $accountnumber,
            'name' => $name,
            'cardnumber' => $cardnumber,
            'expiration' => $expiration,
            'cvc' => $cvc,
            'pin' => $pin,
            'created_at' => $createdate,
            'updated_at' => $updatedate
        ]);

        // Return a response
        return response()->json(['message' => 'Card created successfully'], 201);
    }


    

    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'accountnumber' => 'required',
            'name' => 'required',
            'cardnumber' => 'required',
            'expiration' => 'required',
            'cvc' => 'required',
            'pin' => 'required',
        ]);

        // Retrieve input data
        $accountnumber = $request->input("accountnumber");
        $name = $request->input("name");
        $cardnumber = $request->input("cardnumber");
        $expiration = $request->input("expiration");
        $cvc = $request->input('cvc');
        $pin = $request->input('pin');
        $updatedate = now();

        // Update data in the database
        DB::table('cards')->where('id', $id)->update([
            'accountnumber' => $accountnumber,
            'name' => $name,
            'cardnumber' => $cardnumber,
            'expiration' => $expiration,
            'cvc' => $cvc,
            'pin' => $pin,
            'updated_at' => $updatedate
        ]);

        // Return a response
        return response()->json(['message' => 'Card updated successfully'], 200);
    }

    public function freezecard(Request $request) {
        $user = auth()->user();
        $sessions = DB::table('personal_access_tokens')->where('tokenable_id', $user->id)->get();
        
        if (sizeof($sessions) == 1) {
             // Extract the email from the session
             $email = $sessions[0]->email;
    
             // Check if the account number is specified in the request
             $number = $request->input('number');

             $accountnumber = 

             $numbers = 



        }





    }


    public function report_lost(Request $request){



    }




    public function destroy($id)
    {
        // Delete data from the database
        DB::table('cards')->where('id', $id)->delete();

        // Return a response
        return response()->json(['message' => 'Card deleted successfully'], 200);
    }
}
