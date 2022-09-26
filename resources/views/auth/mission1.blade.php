@extends('layouts.dashboardLayout')

@section('mission')
<div class="col-md-8 white-box row justify-content-center">
   <form method="POST" action="missions-entrepreneur">
            @csrf
            <div class="row row justify-content-center">
                <div class="col-md-12"> 
                    <div class="form-group">
                        <label class="titre_mission" for="titre_mission">Denomination du projet</label>
                        <input type="text" class="form-control" name="titre_mission" id="titre_mission" placeholder="Ex: Besoin de menuisiers" required>
                    </div>
                </div>
                <div class="col-md-6"> 
                    <div class="form-group">
                        <label class="pays" for="nombre_candidats">Cout estimatif du projet</label>
                        <input type="text" class="form-control" name="cout_projet" id="cout_projet" placeholder="En chiffre et en lettre" required>
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="date_debut" for="date_debut">Objectifs du projet</label>
                        <input type="text" class="form-control" name="objectif_projet" id="objectif_projet" placeholder="objectif_projet" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="resume">Description de pojet</label>
                        <textarea name="description_projet" class="form-control" id="description_projet" cols="30" rows="4" placeholder="Enumerez les besoins et services sollicite" required></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="date_fin" for="date_fin">Domaine d'expertise sollicite</label>
                        <input type="text" class="form-control" name="services_sollicites" id="services_sollicites" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="date_fin" for="date_fin">Date de debut</label>
                        <input type="date" class="form-control" name="date_debut" id="date_debut" placeholder="" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="date_fin" for="date_fin">Date de fin</label>
                        <input type="date" class="form-control" name="date_fin" id="date_fin" placeholder="" required>
                    </div>
                </div>
               
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" value="Soumettre la mission" class="btn btn-info">
                        <div class="submitting"></div>
                    </div>
                </div>
            </div>
           
        </form>
 
</div>


@endsection