<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Editeur;

class EditeursController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['editeurs'] = Editeur::all();
        return view('admin.editeurs.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.editeurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Editeur $editeur)
    {
        $editeur->nom = $request->nom;
        $editeur->prenom = $request->prenom;
        $editeur->email = $request->email;
        $editeur->adresse = $request->adresse;
        $editeur->tel = $request->tel;
        $editeur->save();
        return redirect('home/editeurs');
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
    public function edit(Editeur $editeur)
    {
        $arr['editeur'] = $editeur;
        return view('admin.editeurs.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Editeur $editeur)
    {
        $editeur->nom = $request->nom;
        $editeur->prenom = $request->prenom;
        $editeur->email = $request->email;
        $editeur->adresse = $request->adresse;
        $editeur->tel = $request->tel;
        $editeur->save();
        return redirect()->route('home.editeurs.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Editeur::destroy($id);
        return redirect()->route('home.editeurs.index');
    }
}
