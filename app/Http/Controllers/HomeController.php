<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
    {
    	return view('index');	
    }
    public function koridor()
    {
    	return view('information-koridor');	
    }
    public function jadwal()
    {
    	return view('informasi-jadwal');	
    }

}
