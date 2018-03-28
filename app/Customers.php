<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class Customers extends Model
{

	public function data()
	{
		 $data = DB::table('customers')->get();
return $data;
    //
    //
	}



    
}
