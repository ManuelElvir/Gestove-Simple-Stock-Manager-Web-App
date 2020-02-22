<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index()
	{
		return view('payments.index');
    }

    /**
     * This function show payments if no payment, show update form or show create form  
     */
    public function show()
	{
		return view('payments.show');
    }

    /**
     * This function create payment in databate
     */
    public function create()
	{
        $success = false;

        //action

        if($success){
            //put success message
            $this->index();
        }

        //put error message
        return view('payments.show');
        
    }

    /**
     * This function update payment in databate
     */
    public function update()
	{
        $success = false;

        //action

        if($success){
            //put success message
            $this->index();
        }

        //put error message
        return view('payments.show');
        
    }
}
