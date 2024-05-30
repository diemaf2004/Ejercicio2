<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruckTruckdriverController extends Controller
{
    public function index()
    {
        $truck_drivers = Truck_driver::all();
        $trucks = Truck::all();
       
        return view('trucks.asociar',compact('truck_drivers','trucks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   

        $truck=Truck::find($request->truck_id);
       
        $truck->truckers()->attach($request->truck_driver_id);
              
        
     return 'hecho';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
