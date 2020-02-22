<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
	{
		return view('users.index');
    }

    /**
     * This function show users if no user, show update form or show create form  
     */
    public function show()
	{
		return view('users.show');
    }

    /**
     * This function create user in databate
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
        return view('users.show');
        
    }

    /**
     * This function update user in databate
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
        return view('users.show');
        
    }

    /**
     * This function delete user in databate
     */
    public function delete()
	{
        $response = ['success'=>false, 'cause'=>'error'];

        //action
        
        return json_encode($response);
        
    }
}
