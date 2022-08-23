<?php

namespace App\Http\Controllers;

use App\Models\parrain;
use Illuminate\Http\Request;

class parrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parrain = parrain::all();


        return view("site.parrainage", compact("parrain"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("site.parrain");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          
            "nom" => 'bail|required|',
            "prenom" => 'bail|required',
            'date_naissance' => 'bail|required|date|',
            "fieul_telephone" => 'bail|required',
            "email." => 'bail|required',
            "password" => 'bail|required',
        ]);
    
        
      
      
        parrain::create([
          
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "date_naissance" => $request->date_naissance,
            "fieul_telephone" => $request->fieul_telephone,
            "email" => $request->email,
            "password" => $request->password,
        ]);
    
      
        return view("site.parrain");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parrain  $parrain
     * @return \Illuminate\Http\Response
     */
    public function show(parrain $parrain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parrain  $parrain
     * @return \Illuminate\Http\Response
     */
    public function edit(parrain $parrain)
    {
        return view("site.parrain", compact("parrain"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parrain  $parrain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parrain $parrain)
    {
        $request->validate([
            "nom" => 'bail|required|',
            "prenom" => 'bail|required',
            'date_naissance' => 'bail|required|date|',
            "fieul_telephone" => 'bail|required',
            "email." => 'bail|required',
            "password" => 'bail|required',

        ]);

        $parrain->update(
            [ 
                  
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "date_naissance" => $request->date_naissance,
            "fieul_telephone" => $request->fieul_telephone,
            "email" => $request->email,
            "password" => $request->password,
            ]
        );
        return redirect(route("parrain.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parrain  $parrain
     * @return \Illuminate\Http\Response
     */
    public function destroy(parrain $parrain)
    {
        $parrain->delete();

        return redirect(route('parrain.index'));
    }
}
