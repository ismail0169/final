<?php

namespace App\Http\Controllers;
use App\flight;
use App\flightstat;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Request;


class flightcont extends Controller
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
        //
        flight::create(Request::all());
        flightstat::create(Request::only('email'));
               return redirect('home');


            }
     public function checkst(Request $request)
     {
        $user = flightstat::where('email',request()->email)->get();
        $data = flight::where('email',request()->email)->get();
        return view('flightstatus',compact("data","user"));
     }
     public function checksc(Request $request)
     {
        $user = flightstat::where('email',request()->email)->get();
       
        return view('schedule',compact("user"));
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
