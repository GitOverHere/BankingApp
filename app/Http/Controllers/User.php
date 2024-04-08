<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                return response()->json([
                    'code' => 200,
                    'message' => 'Login successful'
                ], 200);
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'streetaddress' => 'required',
            'city' => 'required',
            'region' => 'required',
            'postalcode' => 'required',
            'country' => 'required',
            'password' => 'required|min:8',
        ]);

        // Placeholder registration logic
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $streetaddress = $request->input('streetaddress');
        $city = $request->input('city');
        $region = $request->input('region');
        $postalcode = $request->input('postalcode');
        $country = $request->input('country');
        $password = $request->input('password');
		
		
		
		 // Hash the password
    $hashedPassword = bcrypt($password);

    // Create a new user record in the 'users' table
    DB::table('users')->insert([
        'name' => $name,
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

    // Generate a unique token for password reset
    $token = Str::random(60);

    // Insert a record into the 'password_resets' table
    DB::table('password_resets')->insert([
        'email' => $email,
        'token' => $token,
        'created_at' => now(),
    ]);

    // Return success response
    return response()->json([
        'code' => 200,
        'message' => 'User registered successfully!',
    ], 200);

		
		
		
		
	   
    }

    public function reset(Request $request)
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