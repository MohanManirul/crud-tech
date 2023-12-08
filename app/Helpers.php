<?php

//Get Authenticate User Id
if ( !function_exists('getAuthUserId')) {
    function getAuthUserId() { 
        if ( auth('super_admin')->check() ) {
            return auth('super_admin')->user()->id;
        } elseif (auth('user')->check() ) {
            return auth('user')->user()->id;
        }
        return false;
    }
}
//Get Authenticate User Id

 
//Get Authenticate User Type 
if ( !function_exists('getAuthUserType')) {
    function getAuthUserType() {
            if ( auth('super_admin')->check() ) {
                return 'super_admin';
            } elseif (auth('user')->check() ) {
                return 'user';
            }
            return false;
    }
}
//Get Authenticate User Type


?>