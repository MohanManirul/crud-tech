<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
   //register function start
   public function register(){
    if( auth('user')->check() ){
        return redirect()->route('user.dashboard');
    }
    else{
        return view("frontend.auth.register");
        }
    
    }

    public function do_register(Request $request){
        $validator  = Validator::make($request->all(),[
            "name" => "required",
            "email" => "required|unique:users,email",
            "password" => "required|min:6|confirmed",
        ]);

        if( $validator->fails() ){
            return response()->json([                
                'errors' => $validator->errors()
            ], 422);
        }
        else{
            try{
                $user = new User();

                $rand = rand(000000,999999);
                $user->user_id  = "U-" . $rand;
                $user->name = $request->name;
                $user->email  = $request->email;
                $user->is_active   = true ;

                $user->password   = Hash::make($request->password);

                if( $user->save() ){

                    if( auth('user')->attempt(['email' => $request->email, 'password' => $request->password],true) ){
                        $url = route('user.dashboard');
                        return response()->json(['register' => $url], 200);                       
                    }
                    else{
                        return response()->json(['error' => 'Invalid Credentials'], 200);
                    }

                }

            }
            catch( Exception $e ){
                return response()->json(['error' => $e->getMessage()], 200);
            }
        }

    }

}
