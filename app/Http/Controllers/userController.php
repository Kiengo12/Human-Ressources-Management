<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
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
    public function show2($id)
    {
        $entreprises = User::all()->where('role','entreprise');
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $postulants = DB::table('users')->where('role','postulant')->get();
        $utilisateurs = User::all()->where('id',$id);
        return view('showUser.prestataireShow',compact('entreprises','entrepreneurs','prestataires','postulants','utilisateurs'));
    }
    public function show3($id)
    {
        $entreprises = User::all()->where('role','entreprise');
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $postulants = DB::table('users')->where('role','postulant')->get();
        $utilisateurs = User::all()->where('id',$id);
        return view('showUser.postulantShow',compact('entreprises','entrepreneurs','prestataires','postulants','utilisateurs'));
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
        $utilisateur = User::all()->where('id',$id);
        $utilisateur->each->delete();
        return redirect('entreprises')->with('success', "L'entreprise numero"." ". $id ." ".  "a ete supprime avec succes");
    }
    public function destroy1($id)
    {
        $utilisateur = User::all()->where('id',$id);
        $utilisateur->each->delete();
        return redirect('entrepreneurs')->with('success', "L'entrepreneur numero"." ". $id ." ".  "a ete supprime avec succes");
    }
    public function destroy2($id)
    {
        $utilisateur = User::all()->where('id',$id);
        $utilisateur->each->delete();
        return redirect('prestataires')->with('success', "Le prestataire numero"." ". $id ." ".  "a ete supprime avec succes");
    }
    public function destroy3($id)
    {
        $utilisateur = User::all()->where('id',$id);
        $utilisateur->each->delete();
        return redirect('postulants')->with('success', "Le postulant numero"." ". $id ." ".  "a ete supprime avec succes");
    }
}
