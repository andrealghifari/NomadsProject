<?php

namespace App\Http\Controllers;

use App\Models\TravelPackage;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index(Request $request)
    {
        $item = TravelPackage::with('galleries')->where('slug', $slug)->firstOrFail();
        return view('pages.details', ['item' => $item]);
    }
}
