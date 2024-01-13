<?php

namespace App\Http\Controllers;
use App\Models\Professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ProfesseurController extends Controller
{
    public function index()
    {
        $professeurs=Professeur::all();
        return response()->json($professeurs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'image' => 'required',
            'num_telephone'=>'required',
            'adresse'=>'required',

        ]);
        $file = $request->file('image');
        $destination='public/images';
        $name = $request->file('image')->getClientOriginalName();
        $file->storeAs($destination,$name);
        Professeur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'adresse' => $request->adresse,
            'num_telephone' => $request->num_telephone,
            'image' => $name,
        ]);
        return response()->json("success");

     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professeur=Professeur::find($id);
        return response()->json($professeur);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'num_telephone'=>'required',
            'adresse'=>'required',

        ]);
        $professeur=Professeur::find($id);
        
        $professeur->nom=$request->nom;
        $professeur->prenom=$request->prenom;
        $professeur->email=$request->email;
        $professeur->image=$request->image;
        $professeur->adresse=$request->adresse;
        $professeur->num_telephone=$request->num_telephone;
        $professeur->save();

        return response()->json("success");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Professeur::destroy($id);
        return response()->json("success");

    }
}
