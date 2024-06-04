<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Trucker;
use Illuminate\Http\Request;

class TruckTruckerController extends Controller
{
    public function index()
    {
        $trucks = Truck::all();
        $truckers = Trucker::all();
       
        return view('trucks.asociar',compact('trucks','truckers'));
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
        $truck->truckers()->attach($request->truck_id);
              
        
     return 'Registro exitoso';
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