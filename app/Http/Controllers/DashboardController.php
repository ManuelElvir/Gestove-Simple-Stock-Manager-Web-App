<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
	{
		return view('dashboard.index');
    }
    
    public function balance()
	{
		return view('dashboard.balance');
	}
    
    public function history()
	{
		return view('dashboard.history');
	}
}
