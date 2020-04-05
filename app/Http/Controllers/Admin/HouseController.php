<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Define middleware para o controller
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Renderiza landing page do site
     * 
     * @return view
     */
    public function index()
    {
        return view('admin.house');
    }
}
