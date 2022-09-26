<?php

namespace App\Http\Controllers;

use App\Models\cv;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class searchController extends Controller
{
    public function entreprise (){
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $postulants = DB::table('users')->where('role','postulant')->get();
        return view('adminMenu.entrepriseMenu', compact('entreprises','prestataires','postulants','entrepreneurs'));
    }
    public function prestataire (){
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        return view('adminMenu.prestataireMenu', compact('entreprises','prestataires','postulants','entrepreneurs'));
    }
    public function postulant (){
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        return view('adminMenu.postulantMenu',compact('entreprises','prestataires','postulants','entrepreneurs'));
    }

    public function entrepreneur (){
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        return view('adminMenu.entrepreneurMenu',compact('entreprises','prestataires','postulants','entrepreneurs'));
    }
    public function profile (){
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        return view('adminMenu.profileMenu',compact('entreprises','prestataires','postulants','entrepreneurs'));
    }
    public function search(){
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        $search = request()->input('search');
        
        $recherche = User::where('domaine_expertise', 'like', "%$search%")->get();
        
        return view('recherche.search', compact('recherche','postulants','entrepreneurs','prestataires','entreprises','search'));
    }
    public function search_id(){
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        $search = request()->input('search');
        
        $recherche = User::where('id', 'like', "%$search%")->get();
        
        return view('recherche.search', compact('recherche','postulants','entrepreneurs','prestataires','entreprises','search'));
    }
    public function show($id)
    {
        $entreprises = User::all()->where('role','entreprise');
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $postulants = DB::table('users')->where('role','postulant')->get();
        $utilisateurs = User::all()->where('id',$id);
        return view('recherche.searchShow',compact('entreprises','entrepreneurs','prestataires','postulants','utilisateurs'));
    }

}
