<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function register(Request $request){
        $incommingData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'password' => ['required', 'string', 'min:3'],
        ]);
        $incommingData['password'] = bcrypt($incommingData['password']);
        $user = User::create($incommingData);
        auth()->login($user);
        print_r($user);
        return redirect('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required','string'],
            'password' => ['required','string'],
        ]);

        if (auth()->attempt([
            'name' => $credentials['name'],
            'password' => $credentials['password'],
        ])) {
            $request->session()->regenerate();
            // debug here
            print_r(auth()->user());

            return redirect("/page1");
        }

        return redirect('/page1')->withErrors([
            'loginError' => 'Incorrect username and password.',
        ]);
    }


    public function logout(Request $request)
    {
        auth()->logout();
        return redirect('/');
    }
}
