<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        require_once __DIR__ . './../../../database/factories/documento.php';

        $cpfs = cpfs();
        $cnpjs = cnpjs();
        dd($cpfs[array_rand($cpfs,1)], $cnpjs[array_rand($cnpjs,1)]);
        return view('home');
    }
}
