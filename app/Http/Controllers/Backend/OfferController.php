<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function create()
    {
 
       return view('Backend.layout.Offer.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price'=>'required',
        ]);
        offer::create([
            'name' => $request->name,
            'price' => $request->price,
            'option_1' => $request->option_1,
            'option_2' => $request->option_2,
        ]);
        return redirect()->back();
    }
    public function list()
    {
        $offer= offer::all();
       return view('Backend.layout.Offer.list',compact('offer'));
    }
}
