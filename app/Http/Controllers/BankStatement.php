<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\HasApiTokens;

class BankStatement extends Controller
{
    
    public function generate(){

       
            // Retrieve data from request
            $accountNumber = $request->input('accountnumber');
            $name = $request->input('name');
            $apr = $request->input('apr');
            $transactions = $request->input('transactions');
            $closingBalance = $request->input('closing_balance');
            $statementDate = $request->input('statement_date');
    
            // Render the LaTeX template with data
            $template = file_get_contents(storage_path('app/statement.tex'));
            $template = str_replace('{{accountnumber}}', $accountNumber, $template);
            $template = str_replace('{{name}}', $name, $template);
            $template = str_replace('{{apr}}', $apr, $template);
            $template = str_replace('{{ closing_balance }}', $closingBalance, $template);
            $template = str_replace('{{ statement_date }}', $statementDate, $template);
    
            $transactionsContent = '';
            foreach ($transactions as $transaction) {
                $transactionsContent .= "{$transaction['date']} & {$transaction['type']} & {$transaction['amount']} \\\\\n";
            }
            $template = str_replace('{% for transaction in transactions %}\n{% endfor %}', $transactionsContent, $template);
    
            // Save the modified template to a temporary file
            $tempFilePath = tempnam(sys_get_temp_dir(), 'bank_statement');
            file_put_contents($tempFilePath . '.tex', $template);
    
            // Use shell_exec to compile LaTeX template to PDF
            $pdfPath = $tempFilePath . '.pdf';
            shell_exec("pdflatex -output-directory=" . dirname($tempFilePath) . " " . $tempFilePath . '.tex');
    
            // Return the generated PDF
            return response()->download($pdfPath, 'bank_statement.pdf')->deleteFileAfterSend();
        

    }







    public function search(Request $request){



        $user = auth()->user();
        $sessions = DB::table('personal_access_tokens')->where('tokenable_id', $user->id)->get();




        if(sizeof($sessions)==1){
            
            $email = $user->where('email',$sessions[0]->email)->first();



            $accounts = DB::table('accounts')->where('userid',$userid)->get();

            if(inarray($request->number,$accounts)){

                $account = $accounts->first();

                $statements = DB::table("bankstatements")->where("accountnumber",$request->accountnumber);

                return response()->json([
                    'code': 200,
                    'data': $statements

                ])

            }

           
    
            }
            else{

            return response()->json([
                'code' => 403,
                'message' => "You do not own this account or it does not exist.";
            ],403)

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





