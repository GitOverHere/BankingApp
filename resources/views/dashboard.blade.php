<?php





function validatetoken(){

if(isset($_COOKIE['token'])){

$token = $_COOKIE['token'];


    $tokens = DB::table("Select * from personal_access_tokens WHERE token=$token");
    if(count($tokens) == 1)){
        //token valid








    }
    else {


    }


}






}








?>
