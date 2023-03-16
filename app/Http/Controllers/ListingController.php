<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index(){
        return view('index', [
            "listings" => Listing::all()
        ]);
    }
    // Show single listing
    public function show(Listing $listing){
        return view('show', [
            "listing" => $listing
        ]);
    }
}
