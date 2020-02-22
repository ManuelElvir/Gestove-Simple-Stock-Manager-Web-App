<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OdersController extends Controller
{
    public function index()
	{
		return view('orders.index');
    }

    /**
     * This function show orders if no order, show update form or show create form  
     */
    public function show()
	{
		return view('orders.show');
    }

    /**
     * This function create order in databate
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
        return view('orders.show');
        
    }

    /**
     * This function update order in databate
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
        return view('orders.show');
        
    }
}
