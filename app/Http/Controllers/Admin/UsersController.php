<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Role;
use Gate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index')->with('users',$users);
    }

    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  User $user)
    {
        $user->name = $request->name;
        $user->cin = $request->cin;
        $user->email = $request->email;
        $user->adresse = $request->adresse;
        $user->tel = $request->tel;
        $user->save();
        if($user->save())
            return redirect('home/users')->with("success","Enregistrement Modifié avec Succés");
        else
            return back()->with("error","Enregistrement n'a pas été Modifier, Ressayez");
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
        if(Gate::denies('edit-users')){
            return redirect( route('admin.users.index'));
        }

        $roles = Role::all();

        return view('admin.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);

        $arr['user'] = $user;
        return view('admin.users.edit')->with($arr);
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
        $user->roles()->sync($request->roles);

        $user->name = $request->name;
        $user->cin = $request->cin;
        $user->email = $request->email;
        $user->adresse = $request->adresse;
        $user->tel = $request->tel;
        $user->save();
        if($user->save())
            return redirect('home/users')->with("success","Enregistrement Modifié avec Succés");
        else
            return back()->with("error","Enregistrement n'a pas été Modifier, Ressayez");
        
    }

    public function destroy($id)
    {
        /*if(Gate::denies('delete-users')){
            return redirect( route('home.users.index'));
        }

        $user->roles()->detach();
        $user->delete();*/

        User::destroy($id);
        return redirect()->route('home.users.index')->with("success","Enregistrement Supprimé avec Succés");
    }
}
