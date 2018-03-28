<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Records;
use DB;
use Flash;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-form');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $this->validate($request, [
        'fname' => 'required',
        'email' => 'required'
    ]);


try { 


           $addlead = [];

    $addlead['fname'] = $request->get('fname');
    $addlead['lname'] = $request->get('lname');
    $addlead['email'] = $request->get('email');
    // $addlead['country'] = 'Pakistan'; //$request->get('country');
    // $addlead['state'] = 'Sindh'; //$request->get('state');
    // $addlead['city'] = 'Karachi'; //$request->get('city');
    $addlead['zipcode'] = $request->get('zipcode');
    $addlead['address'] = $request->get('address');
    $addlead['round'] = $request->get('phone');
    $addlead['type'] = $request->get('type');
    $addlead['campaign_name'] = $request->get('campaign_name');
    $addlead['status'] = $request->get('status');
    // Mail delivery logic goes here

    DB::table('records')->insert($addlead);
    flash('Records Added Successfully')->success();

    return redirect()->back();

    // Closures include ->first(), ->get(), ->pluck(), etc.
} catch(\Illuminate\Database\QueryException $ex){ 
     flash($ex->getMessage())->error();
  //dd($ex->getMessage()); 
  // Note any method of class PDOException can be called on $ex.
}


        //dd($request->all());

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
