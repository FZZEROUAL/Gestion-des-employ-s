<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    
     
     public function index()
     {
         $users = DB::table('users')->get();
         return view('form')->with('users', $users);
     }
     
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $age = $request->input('age');
    
        DB::table('users')->insert([
            'nom' => $nom,
            'prenom' => $prenom,
            'age' => $age,
            'email' => 'email'
        ]);
    
        return redirect()->route('tp3.create')->with('success', 'Données insérées avec succès!');
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
         $user = DB::table('users')->find($id);
         return view('users.edit', compact('user'));
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
         $nom = $request->input('nom');
         $prenom = $request->input('prenom');
         $age = $request->input('age');
 
         DB::table('users')->where('id', $id)->update([
             'nom' => $nom,
             'prenom' => $prenom,
             'age' => $age
         ]);
 
         return redirect()->route('users.index')->with('success', 'Utilisateur mis à jour avec succès!');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('users.index')->with('success', 'Utilisateur supprimé avec succès!');
    }
}
