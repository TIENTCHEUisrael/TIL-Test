<?php

namespace App\Http\Controllers;
use \App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    public function contrat()
    {
        return view('contrat');
    }
    public function liste(){
        $liste = Contrat::all();
        return view('contrat_liste', compact('liste'));
    }
}
