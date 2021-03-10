<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function getLogin()
    {
        return view('login');
    }

    function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return view('dashboard');
        } else {
            return back()->withInput();
        }
    }

    function getSignup()
    {
        return view('signup');
    }

    function postSignup(Request $request)
    {
        $request->validate([
            'email' => 'unique:users',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->psw);
        $user->save();
        return redirect('login');
    }

    function getCompany()
    {
        $companies = Company::all();
        return view('company', ['companies' => $companies]);
    }

    function getDetail(Request $request)
    {
        $company = Company::find($request->code);
        return view('detail', ['company' => $company]);
    }

    function postCompany(Request $request)
    {
        $companies = Company::where('Name', 'LIKE', $request->cpn_name)->get();
        return view('company', ['companies' => $companies]);
    }

}
