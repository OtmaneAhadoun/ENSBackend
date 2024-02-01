<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;
use App\Models\Professeur;
use App\Models\Filiere;
class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    public function preSelect(Request $request){
        foreach($request->data as $item){
            $inscriptions=Inscription::where('idFiliere',$item['idFiliere'])
            ->orderBy('noteGeneral','desc')
            ->limit($item['number'])
            ->get();

          
            foreach($inscriptions as $inscription){
                $inscription->status=true;
                $inscription->save();
            }

        }
        
        return  response()->json("success");
    }


    public function getCount(){
        $counts=Inscription::
        select('filiere.id as idFiliere','filiere.nom as nomFiliere',\DB::raw('COUNT(inscription.id) as count'))
        ->rightJoin('filiere','filiere.id','=','inscription.idFiliere')
        ->groupBy('filiere.id',"filiere.nom")
        ->get();


        return  response()->json($counts);

    }


    public function getetudiantbyfiliere(Request $request){
        $inscriptions=Inscription::where('idFiliere',$request->idfiliere)->where('status',1)->get();
        return response()->json($inscriptions);
    }


    public function getstatistic(){
        $inscriptions=Inscription::where('status',1)->get();
        $professeurs=Professeur::all();
        $filieres=Filiere::all();
        $data=["inscription"=>count($inscriptions),"professeurs"=>count($professeurs),"filieres"=>count($filieres)];
        return response()->json($data);
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
    public function all()
    {
        
        $modules=Inscription::select("Inscription.*","filiere.nom as nomFiliere")->join('filiere','filiere.id','=','Inscription.idFiliere')->get();
        return response()->json($modules);
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
            'prenom' => 'required',
            'code_massar' => 'required',
            'cin' => 'required',
            'dateNaissance' => 'required',
            'university' => 'required',
            'diplome' => 'required',
            'noteGeneral' => 'required',
            'idFiliere' => 'required',
        ]);

        
        $inscription = Inscription::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "code_massar" => $request->code_massar,
            "cin" => $request->cin,
            "dateNaissance" => $request->dateNaissance,
            "university" => $request->university,
            "diplome" => $request->diplome,
            "noteGeneral" => $request->noteGeneral,
            "idFiliere" => $request->idFiliere,
            "status" => false
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
