<?php

namespace App\Http\Controllers;

use App\Venue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VenueController extends Controller
{
    public function index(){

        return view('pages.index');
    }
    public function investorList(){

        return view('pages.venue_list');
    }


    public function create()
    {
        //
        return view('pages.create_venue');
    }


    public function store(Request $request)
    {

        Venue::create([
            'name' => $request->name,
            'address' => $request->address,
            'capacity' => $request->capacity,
            'price' => $request->price,
        ]);


        return redirect('create-venue')->with(['success' => 'New Venue created successfully']);
    }


    public function show()
    {
        $venues = Venue::all();

        return view('pages.venue_list',['venues'=>$venues]);

    }

}
