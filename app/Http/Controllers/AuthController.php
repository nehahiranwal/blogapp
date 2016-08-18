<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;


class AuthController extends Controller
{
    public function create()
{
    return view('login');
}
public function store(Request $request)
 { 
 $this->validate($request, [
        'email'    => 'required|email',
        'password' => 'required'
    ]);

    $credentials = $request->only( 'email', 'password' );

    if(Auth::attempt($credentials))
    {
        return redirect('/blog');
    }
    else
    {
        // Your logic of invalid credentials.
        return 'Invalid Credentials';
    }
}
public function logout()
 {
    Auth::logout();
        
    return Redirect('/login');
 }


}