<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\String_;

class AuthController extends Controller
{
    public function showForm()
    {
        return view("login");
    }

    function login(Request $request)
    {
        $request->validate(['email'=>'required','password'=>'required']);
        $user = $this->validateUser($request['email'], $request['password']);

        if($user !== null ){
            Auth::login($user);
            return  redirect("/");

        }
        else{
            return redirect()->back()->withErrors(['password'=>"invalid credential"]);
        }


    }


    /**
     * return the requested user
     *
     * @param String $password
     * @param String $username
     * @return User
     */
    protected function validateUser($username, $password)
    {
        $user = User::where("email","$username")->where("password","$password")->first();

        return $user;
    }
}
