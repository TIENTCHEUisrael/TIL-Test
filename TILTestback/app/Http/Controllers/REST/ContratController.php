<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Contrat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ContratController extends Controller
{
    public function index()
    {
        $contrat = Contrat::all();
        return response()->json($contrat,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
                DB::beginTransaction();
                $contrat = Contrat:: create([
                'numero' => $request->numero,
                'type' => $request->type,
                'date' => $request->date,
                'createdAt' => $request->createdAt,
                'duree' => $request->duree,
                'idclient' => $request->idclient,
            ]);

            DB::commit();


            return response()->json($contrat,200);
        }catch(Throwable $th){            
            dd($th);
            return response()->json('{"erreur": "impossible de sauvegarde"}',404);

        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Contrat $contrat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        try {
            //code...
            DB::beginTransaction();            
            $contrat = Contrat::find($id);
            $contrat->update($request->all());
            DB::commit();
            return response()->json($contrat,200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur de mise a jour',500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            
            DB::beginTransaction();
            $contrat=Contrat::find($id);
            $contrat->delete();
            DB::commit();
          return response()->json('contrat suprimer avec succes',200);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression',500);
        }


    }
}
