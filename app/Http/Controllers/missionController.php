<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class missionController extends Controller
{
    
    public function entrepriseMission (){
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        return view('auth.mission',compact('postulants','entrepreneurs','prestataires','entreprises'));
    }
    public function entrepreneurMission (){
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        return view('auth.mission1',compact('postulants','entrepreneurs','prestataires','entreprises'));
    }


    public function entrepriseMissions(Request $request)
    {
        
    $identifiant = Auth::user()->id;
     Mission::create([
        'titre_mission' => $request->titre_mission,
        'nombre_candidats' => $request->nombre_candidats,
        'date_debut' => $request->date_debut,
        'date_fin' =>$request->date_fin,
        'services_sollicites' => $request->services_sollicites,
        'role'=> 'entreprise',
        'id_auth' => $identifiant
     ]);
        
        return redirect("entreprise-listeMissions")->with('success', 'Mission creee avec succes');
    }

    public function entrepreneurMissions(Request $request)
    {
       
    $identifiant = Auth::user()->id;
     Mission::create([
        'titre_mission' => $request->titre_mission,
        'cout_projet' => $request->cout_projet,
        'description_projet' => $request->description_projet,
        'objectif_projet' => $request->objectif_projet,
       
        'nombre_candidats' => $request->nombre_candidats,
        'date_debut' => $request->date_debut,
        'date_fin' =>$request->date_fin,
        'services_sollicites' => $request->services_sollicites,
        'role'=> 'entrepreneur',
        'id_auth' => $identifiant
     ]);
        
        return redirect("entrepreneur-listeMissions")->with('success', 'Mission creee avec succes');
    }

    public function entrepriseListeMissions (){
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        $missions = Mission::paginate(6)->where('role','entreprise');
       
        
        return view('adminMenu.missionEntreprises',compact('postulants', 'entrepreneurs', 'prestataires','entreprises', 'missions'));
    }

    public function entrepreneurListeMissions (){
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        $missions = Mission::paginate(6)->where('role','entrepreneur');
        
        return view('adminMenu.missionEntrepreneurs',compact('postulants', 'entrepreneurs', 'prestataires','entreprises', 'missions'));
    }
   

    public function missions_entreprises (){
        $postulants = DB::table('users')->where('role','postulant')->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->get();
        $prestataires = DB::table('users')->where('role','prestataire')->get();
        $entreprises = DB::table('users')->where('role','entreprise')->get();
        $missions = DB::table('missions')->where('role','entreprise')->latest()->get();
       
        return view('adminMenu.missionEntreprises',compact('postulants', 'entrepreneurs', 'prestataires','entreprises', 'missions'));
    }
    public function missions_entrepreneurs (){
        $postulants = DB::table('users')->where('role','postulant')->latest()->get();
        $entrepreneurs = DB::table('users')->where('role','entrepreneur')->latest()->get();
        $prestataires = DB::table('users')->where('role','prestataire')->latest()->get();
        $entreprises = DB::table('users')->where('role','entreprise')->latest()->get();
        $missions = DB::table('missions')->where('role','entrepreneur')->latest()->get();
        
        return view('adminMenu.missionEntrepreneurs',compact('postulants', 'entrepreneurs', 'prestataires','entreprises', 'missions'));
    }
}
