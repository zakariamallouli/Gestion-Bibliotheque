<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Adherent;

class AdherentsController extends Controller
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
        $arr['adherents'] = Adherent::all();
        return view('admin.adherents.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adherents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Adherents $adherent)
    {
        $adherent->nom = $request->nom;
        $adherent->prenom = $request->prenom;
        $adherent->cin = $request->cin;
        $adherent->email = $request->email;
        $adherent->adresse = $request->adresse;
        $adherent->tel = $request->tel;
        $adherent->save();
        return redirect('home/adherents');
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
    public function edit(Adherent $adherent)
    {
        $arr['adherent'] = $adherent;
        return view('admin.adherents.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adherent $adherent)
    {
        $adherent->nom = $request->nom;
        $adherent->prenom = $request->prenom;
        $adherent->cin = $request->cin;
        $adherent->email = $request->email;
        $adherent->adresse = $request->adresse;
        $adherent->tel = $request->tel;
        $adherent->save();
        return redirect()->route('home.adherents.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        Adherent::destroy($id);
        return redirect()->route('home.adherents.index');
    }
}
