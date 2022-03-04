<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bids;

class BidsController extends Controller
{
    public function create(Request $request){
        // dd($request->all());

        Bids::create([
            'bid_number' => $request->input('bid_number'),
            'description' => $request->input('description'),
            'date_published' => $request->input('date_published'),
            'amount' => $request->input('amount'),
            'deadline' => $request->input('deadline'),
            'lead' => $request->input('lead')
        ]);

        return redirect('/home')->with('status', 'Bid created successfully!');
    }
}
