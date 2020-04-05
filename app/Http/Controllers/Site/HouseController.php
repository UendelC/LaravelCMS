<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseController extends Controller
{
    /**
     * Home da site publico
     * 
     * @return view()
     */
    public function index()
    {
        return view('site.house');
    }
}
