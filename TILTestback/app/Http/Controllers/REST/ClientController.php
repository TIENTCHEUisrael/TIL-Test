<?php

namespace App\Http\Controllers\REST;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ClientController extends Controller
{
    public function index()
    {
        $client = Client::all();
        return response()->json($client,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
                DB::beginTransaction();
                $client = Client:: create([
                'nom' => $request->nom,
                'ville' => $request->ville,
                'telephone' => $request->telephone,
                'numero' => $request->numero,
                'createdAt' => $request->createdAt,
            ]);

            DB::commit();


            return response()->json($client,200);
        }catch(Throwable $th){            
            dd($th);
            return response()->json('{"erreur": "impossible de sauvegarde"}',404);

        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
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
            $client = Client::find($id);
            $client->update($request->all());
            DB::commit();
            return response()->json($client,200);
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
            $client=Client::find($id);
            $client->delete();
            DB::commit();
          return response()->json('client suprimer avec succes',200);

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('erreur au niveau de la supression',500);
        }


    }
}
