<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $arr['users'] = User::all();
        return view('admin.adherents.index')->with($arr);
    }

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
    public function store(Request $request,  User $user)
    {
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->cin = $request->cin;
        $user->email = $request->email;
        $user->adresse = $request->adresse;
        $user->tel = $request->tel;
        $user->save();
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
    public function edit(User $user)
    {
        $arr['user'] = $user;
        return view('admin.adherents.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, User $user)
    {
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->cin = $request->cin;
        $user->email = $request->email;
        $user->adresse = $request->adresse;
        $user->tel = $request->tel;
        $user->save();
        return redirect()->route('home.adherents.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('home.adherents.index');
    }
}
