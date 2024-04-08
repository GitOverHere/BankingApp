<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Import the DB facade

class CardController extends Controller
{
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

    public function destroy($id)
    {
        // Delete data from the database
        DB::table('cards')->where('id', $id)->delete();

        // Return a response
        return response()->json(['message' => 'Card deleted successfully'], 200);
    }
}
