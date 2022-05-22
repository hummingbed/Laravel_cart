<?php

namespace App\Http\Controllers;
use App\User;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getSignUp()
    {
        return view('user/signup');
    }

    public function postSignUp(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required|min:8',
            'email' => 'required|email|unique:users'
        ]);
        
        $user = new User([
            'name' =>  $request->input('name'),
            'email' => $request->input('email'),
            'password' =>  ($request->input('password')),
        ]);

        $user->save();

        return redirect()->route('product.index');
    }

    public function getLogin(Request $request)
    {
        return view('user.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt(
            [
                'email' => $request->input('email'),
                'password' =>  ($request->input('password'))
            ]
        ))
        {
            return redirect()->route('user.profile');
        }
        else{
            return redirect()->back();
        }
    }

    public function userProfile()
    {
        return view('user.profile');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->back();
    }
}
