<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class missionManage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function show($id)
    {
        $entreprises = User::all()->where('role','entreprise');
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $postulants = DB::table('users')->where('role','postulant')->get();
        $utilisateurs = User::all()->where('id',$id);
        return view('showUser.entrepriseShow',compact('entreprises','entrepreneurs','prestataires','postulants','utilisateurs'));
    }
    public function show1($id)
    {
        $entreprises = User::all()->where('role','entreprise');
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $postulants = DB::table('users')->where('role','postulant')->get();
        $utilisateurs = User::all()->where('id',$id);
        return view('showUser.entrepreneurShow',compact('entreprises','entrepreneurs','prestataires','postulants','utilisateurs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

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
        $mission = Mission::all()->where('id',$id);
        $mission->each->delete();
        return redirect('missions-entreprises')->with('success', "La mission ete supprimee avec succes");
    }
    public function destroy1($id)
    {
        $mission = Mission::all()->where('id',$id);
        $mission->each->delete();
        return redirect('missions-entrepreneurs')->with('success', "La mission ete supprimee avec succes");
    }
 
}
