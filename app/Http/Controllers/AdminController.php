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
    'message' => 'Successfully created your account!'
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


   DB::update("
    UPDATE users
    SET
    first_name = CASE WHEN first_name IS NOT NULL THEN '$first_name' ELSE first_name END,
    middle_name = CASE WHEN middle_name IS NOT NULL THEN '$middle_name' ELSE middle_name END,
    last_name = CASE WHEN last_name IS NOT NULL THEN '$last_name' ELSE last_name END,
    email = CASE WHEN email IS NOT NULL THEN '$email' ELSE email END,
    phone = CASE WHEN phone IS NOT NULL THEN '$phone' ELSE phone END,
    street_address = CASE WHEN street_address IS NOT NULL THEN '$street_address' ELSE street_address END,
    city = CASE WHEN city IS NOT NULL THEN '$city' ELSE city END,
    region = CASE WHEN region IS NOT NULL THEN '$region' ELSE region END,
    postalcode = CASE WHEN postalcode IS NOT NULL THEN '$postalcode' ELSE postalcode END,
    country = CASE WHEN country IS NOT NULL THEN '$country' ELSE country END,
    password = CASE WHEN password IS NOT NULL THEN '$password' ELSE password END
    WHERE id=$id");



// Create a JSON response
                    $response = response()->json([
                    'code' => 200,
                    'message' => 'Sucessfully created your account!'], 200);

                    // Set the cookie in the response
                    $response->headers->setCookie(Cookie::make('token', $token->token, 60)); // Set your cookie details here

                    // Create a redirect response
                    $redirectResponse = Redirect::to('../dashboard');

// Return the response with the cookie set and the redirect
return $response->withHeaders($redirectResponse->headers->all());







    }


    public function DeleteUser(Request $request){

        $id = $request->input('users');

        DB::delete("delete from users where id = ?",[$id]);


        /// Create a JSON response
                    $response = response()->json([
                    'code' => 200,
                    'message' => 'Sucessfully created your account!'], 200);

                    // Set the cookie in the response
                    $response->headers->setCookie(Cookie::make('token', $token->token, 60)); // Set your cookie details here

                    // Create a redirect response
                    $redirectResponse = Redirect::to('../dashboard');

// Return the response with the cookie set and the redirect
return $response->withHeaders($redirectResponse->headers->all());



    }





    public function SearchUser(Request $request){



    }


    public function FreezeUser(){
        //When this function executed, user will recive message and no longer be able to login.


    }

    public function InsertAccount(){


    }

    public function UpdateAccount(){



    }

    public function DeleteAccount(){



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
