<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AdministratorsController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/control_admin';

    function __construct()
    {
        $this->middleware('auth:admins', ['only' => ['secret']]);
    }

    protected function guard()
    {
        return Auth::guard('admins');
    }

    function showLoginForm()
    {
        return view('administrators\login'); //Lugar donde esta el Login de administradores
    }
    public function secret(){
        return view('administrators/control/control');
    }
}
