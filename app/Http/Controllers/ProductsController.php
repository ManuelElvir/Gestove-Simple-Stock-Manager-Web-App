<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * List product of shop by request
     */
    public function index_shop()
	{
		return view('products.index');
    }
    
    /**
     * List product of store by request
     */
    public function index_store()
	{
		return view('products.index');
    }
    
    /**
     * List product by request
     */
    public function perimeal()
	{
		return view('products.perimeal');
    }
    
    /**
     * List product by request
     */
    public function finished_shop($isStore = false)
	{
		return view('products.finished');
    }
    
    /**
     * List product by request
     */
    public function finished_store()
	{
		$this->finished(true);
    }

    /**
     * This function show products if no product, show update form or show create form  
     */
    public function show()
	{
		return view('products.show');
    }

    /**
     * This Request update quantity product
     */
    public function add()
	{
		$response = ['success'=>false, 'cause'=>'error'];

        //action
        
        return json_encode($response);
    }

    /**
     * This Request remove quantity product
     */
    public function remove()
	{
		add();
    }

    /**
     * This function create product in databate
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
        return view('products.show');
        
    }

    /**
     * This function update product in databate
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
        return view('products.show');
        
    }

    /**
     * This function delete product in databate
     */
    public function delete()
	{
        $response = ['success'=>false, 'cause'=>'error'];

        //action
        
        return json_encode($response);
        
    }
}
