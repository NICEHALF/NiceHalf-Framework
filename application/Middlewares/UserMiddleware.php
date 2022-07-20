<?php

// NAMESPACE
namespace NicehalfCore\App\Middlewares;

use NicehalfCore\System\Sessions\Session;

// CLASS
class UserMiddleware
{
    /**
     * @param $request
     * @param $next
     * @return mixed
     */
    public function handle()
    {
        // CHECK IF SESSION IS SET
        $user = Session::get('user');

        // IF SESSION IS SETED
        if ($user == true) {

            // RETURN TRUE
            return true;
        } else {

            // RETURN FALSE AND REDIRECT TO LOGIN
            return redirect('/');
        }
    }
}
