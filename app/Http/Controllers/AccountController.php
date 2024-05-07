<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\HasApiTokens;

class AccountController extends Controller
{





    public function view(Request $request)
    {

         $userid = Auth::user();


        $sessions = DB::table('personal_access_tokens')
            ->where('tokenable_id', $userid)
            ->get(['token']);




        // Check if there's exactly one session associated with the user
        if (sizeof($sessions) == 1) {
            // Extract the email from the session
            $email = $sessions[0]->email;

            // Check if the account number is specified in the request
            $number = $request->input('number');

            // If account number is specified, retrieve specific account info
            if ($number) {
                $account = Account::where('number', $number)->first();
                if ($account) {
                    // Return account info if found
                    return response()->json([
                        'code' => 200,
                        'results' => [
                            [
                                'number' => $account->number,
                                'name' => $account->name,
                                'balance' => $account->balance,
                                'created_at' => $account->created_at,
                            ],
                        ],
                    ]);
                } else {
                    // Return error message if account not found
                    return response()->json([
                        'code' => 404,
                        'message' => 'Account not found',
                    ], 404);
                }
            } else {
                // Return all accounts associated with the user
                $accounts = Account::where('userid', $user->id)->get();
                $results = $accounts->map(function ($account) {
                    return [
                        'number' => $account->number,
                        'name' => $account->name,
                        'balance' => $account->balance,
                        'created_at' => $account->created_at,
                    ];
                });
                return response()->json([
                    'code' => 200,
                    'results' => $results,
                ]);
            }
        } else {
            // Return error message if no session or multiple sessions found
            return response()->json([
                'code' => 400,
                'message' => 'Invalid session',
            ], 400);
        }
    }


    public function insert(Request $request){
        $this->create($request);
    }


    public function create(Request $request)
    {


      $user = auth()->user();


$sessions = DB::table('personal_access_tokens')
            ->where('tokenable_id', $user->id)
            ->get(['token']);





        if(sizeof($sessions)==1){

            $email = $user->where('email',$sessions[0]->email)->first();


            $user = DB::table('users')->where('email',$email)->first();

            $name= $user->first_name+$user->middle_name+$user->last_name;

            $number = random_int(25);
            $userid = $user->id;
            $balance = "0";
            $created_at = new DateTime();
            $updated_at = $created_at;


            $DB::insert("insert into accounts (number,name,userid,balance,created_at,updated_at) values(?,?,?,?,?,?)",
            [$number,$userid,$balance,$created_at,$updated_at]

            );



            return response()->json([
                'code' => 200,
                'message' => "Successfully created your new account."
            ],200);

        }


        else {
            // Return error message if no session or multiple sessions found
            return response()->json([
                'code' => 400,
                'message' => 'Invalid session',
            ], 400);
        }



    }

    public function update(Request $request)
    {
        //only admins may use this
        $user = auth()->user();
        $sessions = DB::table('personal_access_tokens')->where('tokenable_id', $user->id)->get();

        if(sizeof($sessions) == 1){
            $email = $user->email;
            $user = DB::table('users')->where('email',$email)->first();
            $field = $request->field;

            switch($field){

           case $field=="number":

                $number = $request->number;
                $newnumber = $request->newnumber;

            DB::update('update accounts set number = ? where number = ?',[$number,$newnumber]);

            return response()->json([
                'code' =>  200,
                'message' => 'Updated account number sucessfully!'
            ], 200);

            break;

           case $field="apr":


            DB::update('update accounts set apr = ? where number = ?',[$request->number,$request->apr]);

            return response()->json([
                'code' =>  200,
                'message' => 'Updated account apr sucessfully!'
            ], 200);

            break;

            default:

            return response()->json([
                'code' =>  400,
                'message' => 'Invalid request! Please try again.'
            ], 400);

            break;
        }

    }

}


    public function delete(Request $request)
    {

        $user = auth()->user();
        $sessions = DB::table('personal_access_tokens')->where('tokenable_id', $user->id)->get();
        if(sizeof($sessions)==1){
            $email = $user->where('email',$sessions[0]->email)->first();


            $user = DB::table('users')->where('email',$email)->first();


            $userid = $user->id;


            $accounts = DB::table('accounts')->where('userid',$userid)->get();

            if(inarray($request->number,$accounts)){


                DB::delete("delete from accounts where number = ?",[$request->number]);

                return response()->json([
                    'code' => 200,
                    'message' => "Successfully deleted your account."
                ],200);
            }
            else{

            return response()->json([
                'code' => 403,
                'message' => "You do not own this account or it does not exist."
            ],403);

            }



        }

        else {
            // Return error message if no session or multiple sessions found
            return response()->json([
                'code' => 400,
                'message' => 'Invalid session',
            ], 400);
        }



    }
}
