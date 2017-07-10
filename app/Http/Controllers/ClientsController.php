<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('crients.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Client::create($data);
        return redirect()->route('clients.index');
    }
}
