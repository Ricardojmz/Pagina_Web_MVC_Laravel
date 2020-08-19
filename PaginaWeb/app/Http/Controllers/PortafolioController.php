<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    public function index()
    {
    	$portafolio = [
			['title' => 'Proyecto #1'],
			['title' => 'Proyecto #2'],
			['title' => 'Proyecto #3'],
			['title' => 'Proyecto #4'],
		];
		return view('portafolio', compact('portafolio'));
    }
}
