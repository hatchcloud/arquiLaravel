<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\product_package;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $packageData = product_package::all();
        return view('home.index', compact('packageData'));
    }

}

