<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;
class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules=Matiere::select("module.*","filiere.nom as nomFiliere")->join('filiere','filiere.id','=','module.idFiliere')->get();
        return response()->json($modules);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'massHoraire' => 'required',
            'idFiliere' => 'required',
        ]);
        Matiere::create([
            'nom' => $request->nom,
            'massHoraire' => $request->massHoraire,
            'idFiliere' => $request->idFiliere,
            
        ]);
        return response()->json("success");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $module=Matiere::find($id);
        return response()->json($module);
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'massHoraire' => 'required',
            'idFiliere' => 'required',
        ]);
        $matiere=Matiere::find($id);
        $matiere->nom=$request->nom;
        $matiere->massHoraire=$request->massHoraire;
        $matiere->idFiliere=$request->idFiliere;
        $matiere->save();
        return response()->json("success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
