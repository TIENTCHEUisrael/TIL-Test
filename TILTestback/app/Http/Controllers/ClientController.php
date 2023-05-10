<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Client;
use \Illuminate\Support\Facades\DB;
use Throwable;

class ClientController extends Controller
{
    public function client()
    {
        return view('client');
    }
    public function liste(){
        $list = Client::all();
        return view('client', compact('list'));

    }
}
