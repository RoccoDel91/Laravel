<?php

namespace App\Http\Controllers;

use illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Crea nuovo controller
     *
     * @returns void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * mostra dashbord dell'app
     *
     * @returns Renderable
     */

    public function index()
    {
        return view('home');

    }
}
