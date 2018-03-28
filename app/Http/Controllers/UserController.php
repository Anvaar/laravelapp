<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use App\Customers;

class UserController extends Controller
{
    //
    //
    
    public function admin()
    {

    	Customers::data();

    }


        public function testflash()
    {
        
        flash('Records Added Successfully')->success();
       return view('testflash');

    }

    public function add()
    {
        return view('add-form');
    }


        public function list()
    {
        return view('list');
    }
}
