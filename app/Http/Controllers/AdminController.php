<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PersonalAccessToken;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Str;

class AdminController extends Controller
{


    public function ExportBankAndSettings(){




    }



    public function FinalizeSetup(){


    }


    public function ResetSetup(){



    }


public function InsertUser(Request $request){


    $first_name = $request->input('first_name');
$middle_name = $request->input('middle_name');
$last_name = $request->input('last_name');
$email = $request->input('email');
$phone = $request->input('phone');
$streetaddress = $request->input('streetaddress');
$city = $request->input('city');
$region = $request->input('region');
$postalcode = $request->input('postalcode');
$country = $request->input('country');
$password = $request->input('password');

DB::table('users')->insert([
    'first_name' => $first_name,
    'middle_name' => $middle_name,
    'last_name' => $last_name,
    'email' => $email,
    'phone' => $phone,
    'streetaddress' => $streetaddress,
    'city' => $city,
    'region' => $region,
    'postalcode' => $postalcode,
    'country' => $country,
    'password' => $password,
    'created_at' => now(),
    'updated_at' => now(),
]);



// Generate a random token
$token = Str::random(40); // Generates a random 40-character token

// Create a JSON response
$response = response()->json([
    'code' => 200,
    'message' => 'Successfully created the user!'
], 200);

// Set the cookie in the response
$response->withCookie(cookie('token', $token, 60)); // Set your cookie details here

// Create a redirect response
$redirectResponse = redirect('../../admindashboard');

// Return the response with the cookie set and the redirect
return $response->withHeaders($redirectResponse->headers->all());



    }



    public function UpdateUser(Request $request){
    $id = $request->input('id');
    $userData = $request->only(['first_name', 'middle_name', 'last_name', 'email', 'phone', 'streetaddress', 'city', 'region', 'postalcode', 'country', 'password']);

    // Update user information in the database
    DB::table('users')
        ->where('id', $id)
        ->update($userData);

    // Generate a random token
    $token = Str::random(40);

    // Create a JSON response
    $response = response()->json([
        'code' => 200,
        'message' => 'Successfully updated the account!'
    ], 200);

    // Set the cookie in the response
    $response->withCookie(cookie('token', $token, 60));

    // Redirect to the dashboard
    return $response->header('Location', '../dashboard');
}


    public function DeleteUser(Request $request){



        // Generate a random token
$token = Str::random(40); // Generates a random 40-character token

        $id = $request->input('users');

        DB::delete("delete from users where id = ?",[$id]);


        /// Create a JSON response
                    $response = response()->json([
                    'code' => 200,
                    'message' => 'Sucessfully deleted the user!'], 200);

                    // Set the cookie in the response
                    $response->headers->setCookie(Cookie::make('token', $token, 60)); // Set your cookie details here

                    // Create a redirect response
                    $redirectResponse = Redirect::to('../admindashboard');

// Return the response with the cookie set and the redirect
return $response->withHeaders($redirectResponse->headers->all());



    }





 public function SearchUser(Request $request){
    $id = $request->input('id');
    $firstName = $request->input('first_name');
    $middleName = $request->input('middle_name');
    $lastName = $request->input('last_name');
    $email = $request->input('email');
    $phone = $request->input('phone');

    // Initialize the query builder
    $query = DB::table('users');

    // Add conditions based on the provided criteria
    if (!empty($id)) {
        $query->where('id', $id);
    }

    if (!empty($firstName)) {
        $query->where('first_name', 'LIKE', '%'.$firstName.'%');
    }

    if (!empty($middleName)) {
        $query->where('middle_name', 'LIKE', '%'.$middleName.'%');
    }

    if (!empty($lastName)) {
        $query->where('last_name', 'LIKE', '%'.$lastName.'%');
    }

    if (!empty($email)) {
        $query->where('email', 'LIKE', '%'.$email.'%');
    }

    if (!empty($phone)) {
        $query->where('phone', 'LIKE', '%'.$phone.'%');
    }

    // Execute the query to get the search results
    $users = $query->get();

    // Create a JSON response with the search results
    $response = response()->json([
        'code' => 200,
        'message' => 'Search results based on the provided criteria',
        'data' => $users
    ], 200);

    // Generate a random token
    $token = Str::random(40); // Generates a random 40-character token

    // Set the cookie in the response
    $response->withCookie(cookie('token', $token, 60)); // Set your cookie details here

    // Create a redirect response
    $redirectResponse = redirect('../../admindashboad');

    // Return the response with the search results, cookie set, and the redirect
    return $response->withHeaders($redirectResponse->headers->all());
}


    public function FreezeUser(){
        //When this function executed, user will recive message and no longer be able to login.





    }

    public function InsertAccount(){




            $number = $request->input('number');
            $userid = $request->input('userid');
            $balance = $request->input('balance');
            $type = $request->input('type');

            $created_at = date('Y-m-d H:i:s');
            $updated_at = $created_at;


            DB::insert("insert into accounts (accountnumber,userid,balance,type,created_at,updated_at) values(?,?,?,?,?,?)",
            [$number,$userid,$balance,$created_at,$updated_at]

            );

            // Generate a random token
    $token = Str::random(40); // Generates a random 40-character token


    $response = response()->json([
        'code' => 200,
        'message' => 'Sucessfully inserted the account!',

    ], 200);


    // Set the cookie in the response
    $response->withCookie(cookie('token', $token, 60)); // Set your cookie details here

    // Create a redirect response
    $redirectResponse = redirect('../../admindashboard');

    // Return the response with the search results, cookie set, and the redirect
    return $response->withHeaders($redirectResponse->headers->all());


    }



    public function UpdateAccount(Request $request){
    $number = $request->input('number');
    $userid = $request->input('userid');
    $balance = $request->input('balance');
    $type = $request->input('type');

    $updated_at = date('Y-m-d H:i:s');

    // Perform an update query to update the account details
    DB::table('accounts')
        ->where('accountnumber', $number)
        ->update([
            'userid' => $userid,
            'balance' => $balance,
            'type' => $type,
            'updated_at' => $updated_at
        ]);

    // Generate a random token
    $token = Str::random(40); // Generates a random 40-character token

    // Create a JSON response
    $response = response()->json([
        'code' => 200,
        'message' => 'Successfully updated the account!'
    ], 200);

    // Set the cookie in the response
    $response->withCookie(cookie('token', $token, 60)); // Set your cookie details here

    // Create a redirect response
    $redirectResponse = redirect('../../admindashboard');

    // Return the response with the cookie set and the redirect
    return $response->withHeaders($redirectResponse->headers->all());
}


 public function DeleteAccount(Request $request){
    $number = $request->input('number');

    // Perform a delete query to remove the account based on the account number
    DB::table('accounts')->where('accountnumber', $number)->delete();

    // Generate a random token
    $token = Str::random(40); // Generates a random 40-character token

    // Create a JSON response
    $response = response()->json([
        'code' => 200,
        'message' => 'Successfully deleted the account!'
    ], 200);

    // Set the cookie in the response
    $response->withCookie(cookie('token', $token, 60)); // Set your cookie details here

    // Create a redirect response
    $redirectResponse = redirect('../../admindashboard');

    // Return the response with the cookie set and the redirect
    return $response->withHeaders($redirectResponse->headers->all());
}



    public function FreezeAccount(){



    }


    public function InsertTransaction(){

    }

    public function UpdateTransaction() {



    }

    public function SearchTransaction(){





    }


    public function DeleteTransaction() {



    }

    public function InsertCard() {



    }

    public function SearchCard(){


    }

    public function UpdateCard() {


    }

    public function ResetCard() {
        // Regenereates Card info, if card lost or stoeln.


    }

    public function DeleteCard() {
        //Delete's the card (not reccoemnded)


    }

    public function DisableCard() {
        //Function to deny all transactions for card.


    }

}
