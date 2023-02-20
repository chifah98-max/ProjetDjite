<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Candidat;
use App\Models\Formation;
use App\Models\Referenciel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;


class CandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidats=Candidat::all();
        $formations=Formation::all();
        $referenciels=Referenciel::all();
        $types=Type::all();
        return view('candidat.candidat',
        ['candidats'=>$candidats,
        'formations'=>$formations,
        'referenciels'=>$referenciels,
        'types'=>$types,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $candidats=Candidat::all();
        $formations=Formation::all();
        $referenciels=Referenciel::all();
        $types=Type::all();
        return view('candidat.create',
         ['candidats'=>$candidats,
         'formations'=>$formations,
         'referenciels'=>$referenciels,
         'types'=>$types,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $candidat=Candidat::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'age'=>$request->age,
            'niveauEtude'=>$request->niveauEtude,
            'sexe'=>$request->sexe,
        ]);
        $candidat->formations()->attach($request->formations);
        $formation=Formation::find($request->formations);
        $formation->referenciels()->attach($request->referenciels);
        $referenciel=Referenciel::find($request->referenciels);
        Referenciel::create([
            'libelle'=>$referenciel->libelle,
            'validated'=>$referenciel->validated,
            'horaire'=>$referenciel->horaire,
            'type_id'=>$request->types,
            
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $candidats=Candidat::find($candidats);
        return view('candidat.edit',['candidats'=>$candidats]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
