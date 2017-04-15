<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\County;

class CountyController extends Controller
{
    public function index()
    {
    	$counties = County::all();
    	return view('counties.index', compact('counties'));
    }
}
