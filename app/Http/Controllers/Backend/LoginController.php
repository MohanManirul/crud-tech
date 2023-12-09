<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //index
    public function index()
    {
        if( auth('super_admin')->check()) {
            return redirect()->route('dashboard');
        } else {
            return view('backend.auth.login');
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
         $superAdmin = SuperAdmin::where('email', $request->email)->first();   

            if ($superAdmin) {
                if (auth('super_admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                    $dashboard = route('dashboard');
                    return response()->json(['login' => $dashboard], 200);
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

    public function superAdminLogout()
    {
        if (auth('super_admin')->check()) {
            Auth::guard('super_admin')->logout();
        }
        return redirect()->route('login.index');
    }
}
