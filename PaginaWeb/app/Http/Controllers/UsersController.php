<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
	public function index(){
    		return view('/administrators/control/usuarios_admin', [
			'users' => User::latest()->paginate(10)
		]);
    }
    public function show($id)
    {
    	return view('/administrators/control/usuarios/show', [
    		'user'=> User::findOrFail($id)
    	]);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('control_admin');
    }
    public function show2($id)
    {
        return view('/administrators/control/usuarios/publica', [
            'user'=> User::findOrFail($id)
        ]);
    }
}
