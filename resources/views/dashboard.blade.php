<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

if (isset($_COOKIE['token'])) {
    $token = $_COOKIE['token'];

    $user = DB::table('personal_access_tokens')->where('token', $token)->first();

    if ($user) {
        Auth::loginUsingId($user->id);

        if (Auth::user()->is_admin) {
            $view = 'admindashboard';
        } else {
            $view = 'accounts';
        }
    } else {
        $view = 'gotologin';
    }
} else {
    $view = 'gotologin';
}

return view($view);
?>
