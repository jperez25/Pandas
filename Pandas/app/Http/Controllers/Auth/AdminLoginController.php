<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    public function admin()
    {
        if(auth()->user()->isAdmin()) {
            return view('admin.admin');
        }
        else{
            redirect()->route('index');
        }
    }
}
