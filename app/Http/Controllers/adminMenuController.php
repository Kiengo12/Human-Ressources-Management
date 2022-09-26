<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class adminMenuController extends Controller
{
    public function entreprise (){
        $entreprises = User::paginate(10)->where('role','entreprise');
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->latest()->get();
        $prestataires = DB::table('users')->where('role','prestataire')->latest()->get();
        $postulants = DB::table('users')->where('role','postulant')->latest()->get();
        return view('adminMenu.entrepriseMenu', compact('entreprises','prestataires','postulants','entrepreneurs'));
    }
    public function prestataire (){
        $prestataires = User::paginate(10)->where('role','prestataire');
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->latest()->get();
        $postulants = DB::table('users')->where('role','postulant')->latest()->get();
        $entreprises = DB::table('users')->where('role','entreprise')->latest()->get();
        return view('adminMenu.prestataireMenu', compact('entreprises','prestataires','postulants','entrepreneurs'));
    }
    public function postulant (){
        $postulants = User::paginate(10)->where('role','postulant');
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->latest()->get();
        $prestataires = DB::table('users')->where('role','prestataire')->latest()->get();
        $entreprises = DB::table('users')->where('role','entreprise')->latest()->get();
        return view('adminMenu.postulantMenu',compact('entreprises','prestataires','postulants','entrepreneurs'));
    }

    public function entrepreneur (){
        $postulants = DB::table('users')->where('role','postulant')->latest()->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->latest()->get();
        $prestataires = DB::table('users')->where('role','prestataire')->latest()->get();
        $entreprises = DB::table('users')->where('role','entreprise')->latest()->get();
        return view('adminMenu.entrepreneurMenu',compact('entreprises','prestataires','postulants','entrepreneurs'));
    }
    public function profile (){
        $postulants = DB::table('users')->where('role','postulant')->latest()->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->latest()->get();
        $prestataires = DB::table('users')->where('role','prestataire')->latest()->get();
        $entreprises = DB::table('users')->where('role','entreprise')->latest()->get();
        return view('adminMenu.profileMenu',compact('entreprises','prestataires','postulants','entrepreneurs'));
    }
}

