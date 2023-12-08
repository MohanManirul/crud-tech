<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function index()
    {
        if ( auth('user')->check() ) {

            return view('frontend.dashboard');
        } else {
            return view('errors.404');
        }
    }

    public function userPost(){
        return "userPost";
    }
    
}
