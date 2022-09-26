@extends('layouts.dashboardLayout')

@section('mission')
<div class="col-md-8 white-box row justify-content-center">
   <form method="POST" action="missions-entreprise">
            @csrf
            <div class="row row justify-content-center">
                <div class="col-md-12"> 
                    <div class="form-group">
                        <label class="titre_mission" for="titre_mission">Libele de la mission</label>
                        <input type="text" class="form-control" name="titre_mission" id="titre_mission" placeholder="Ex: Besoin de menuisiers" required>
                    </div>
                </div>
                <div class="col-md-12"> 
                    <div class="form-group">
                        <label class="pays" for="nombre_candidats">Combien de candidats avez vous besoin?</label>
                        <input type="number" class="form-control" name="nombre_candidats" id="nombre_candidats" placeholder="" required>
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="date_debut" for="date_debut">Date de debut</label>
                        <input type="date" class="form-control" name="date_debut" id="date_debut" placeholder="Date de debut" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="date_fin" for="date_fin">Date de fin</label>
                        <input type="date" class="form-control" name="date_fin" id="date_fin" placeholder="Date de fin" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="resume">Enumerez les besoins et services sollicite</label>
                        <textarea name="services_sollicites" class="form-control" id="services_sollicites" cols="30" rows="4" placeholder="Enumerez les besoins et services sollicite" requireds></textarea>
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