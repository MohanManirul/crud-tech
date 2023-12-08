<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
class AuthenticationController extends Controller
{ 
     //index
     public function index()
     {
         if( auth('user')->check() ) {
             return redirect()->route('dashboard');
         } else {
             return view('frontend.auth.login');
         }
     }

     // login check
    public function loginCheck(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        try {

            $user = User::where('email', $request->email)->first();

            if ($user) {
                
                if (auth('user')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                  
                    $user_dashboard = route('user.dashboard');
                    return response()->json(['login' => $user_dashboard], 200);
                } else {
                    return response()->json(['error' => 'Invalid Credentials'], 200);
                }
            } else {
                return response()->json(['error' => 'Invalid Credentials'], 200);
            }
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 200);
        }


    }

    public function logout()
    {
        if (auth('user')->check()) {
            Auth::guard('user')->logout();
            return redirect()->route('front.login');
        }
    }
}
