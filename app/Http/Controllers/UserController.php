<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PersonalAccessToken;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    public $ip_address = ""; // Initialize to empty string
    public $session_id; // You can initialize it later or keep it as null

    // Define the fields here
    // id   name   email   phone   streetaddress   city   region   postalcode   country   email_verified_at   password   remember_token   created_at   updated_at

    public function login(Request $request)
    {

        // Validate incoming request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Retrieve email and password from the request
        $email = $request->input('email');
        $password = $request->input('password');

        // Check if email exists in the database
        $user = DB::table('users')->where('email', $email)->first();

        if ($user) {
            // Verify password
            if (password_verify($password, $user->password)) {
                // Password matches, return success response

                    $token = new PersonalAccessToken();
                    $token->tokenable_type = 'App\\Models\\User'; // Example value for tokenable_type
                    $token->tokenable_id = 1; // Example value for tokenable_id
                    $token->name = 'Example Token';
                    $token->token = 'random_token_string';
                    $token->abilities = ['create', 'read', 'update', 'delete']; // Example value for abilities

                    $token->save();


                    // Create a JSON response
$response = response()->json([
    'code' => 200,
    'message' => 'Login successful'
], 200);

// Set the cookie in the response
$response->headers->setCookie(Cookie::make('token', $token->token, 60)); // Set your cookie details here

// Create a redirect response
$redirectResponse = Redirect::to('../dashboard');

// Return the response with the cookie set and the redirect
return $response->withHeaders($redirectResponse->headers->all());

            } else {
                // Password does not match, return error response
                return response()->json([
                    'code' => 403,
                    'message' => 'Username or password is incorrect.'
                ], 403);
            }
        } else {
            // Email not found, return error response
            return response()->json([
                'code' => 403,
                'message' => 'Username or password is incorrect.'
            ], 403);
        }
    }

    public function register(Request $request)
    {

	   // Validate incoming request
        $request->validate([
            'first-name' => 'required',
            'middle-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'streetaddress' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postalcode' => 'required',
            'country' => 'required',
            'password' => 'required|min:8',
        ]);


          $token = $request->user()->createToken($request->token);




        // Placeholder registration logic
        $first_name = $request->input('first-name');
        $middle_name = $request->input('middle-name');
        $last_name = $request->input('last-name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $streetaddress = $request->input('streetaddress');
        $city = $request->input('city');
        $region = $request->input('region');
        $postalcode = $request->input('postalcode');
        $country = $request->input('country');
        $password = $request->input('password');



		 // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_ARGON2I);

    // Create a new user record in the 'users' table
    DB::table('users')->insert([
        'first_name' -> $first_name,
        'middle_name' -> $middle_name,
        'last_name' -> $last_name,
        'email' => $email,
        'phone' => $phone,
        'streetaddress' => $streetaddress,
        'city' => $city,
        'region' => $region,
        'postalcode' => $postalcode,
        'country' => $country,
        'password' => $hashedPassword,
        'created_at' => now(),
        'updated_at' => now(),
    ]);


    return response()->json([
        'code' => 200,
        'message' => 'Succesfully created your account.',
    ], 200);






    }



    public function startreset(Request $request){


// Generate a unique token for password reset
    $users = DB::select('select * from users where email = $request->email');

    $email  = "asdasd";




    $token = Str::random(60);

    // Insert a record into the 'password_resets' table
    DB::table('password_resets')->insert([
        'email' => $request->email,
        'token' => $token,
        'created_at' => now(),
    ]);

    // Return success response
    return response()->json([
        'code' => 200,
        'message' => 'If that email is valid, you will recieve a password reset email.',
    ], 200);






    }




    public function finalizereset(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email',
        ]);

        // Placeholder code to send reset email
        // You will need to implement your SMTP mailer to send the email

        // For security reasons, we will not reveal if the email is valid or not
        return response()->json([
            'code' => 200,
            'message' => 'Password reset email sent. Check your inbox.',
        ], 200);
    }
}
