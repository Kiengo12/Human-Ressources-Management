@extends('layouts.dashboardLayout')
@section('mission')


<div class="card white-box p-0">
    <div class="card-body">
        <h3 class="box-title mb-0">Les missions</h3>
    </div>
</div>    
 

  <div class="col-md-12">
    <div class="container">
      <div class="row hidden-md-up">
        @foreach($missions as $mission)
        <div class="col-md-4">
          <div class="card">
            <div class="card-block p-4">
              <h4 class="card-title"><b>{{$mission->titre_mission}}</b></h4>
              <p class="card-text p-y-1">Cout estimatif du projet:{{$mission->cout_projet}}</p>
              <p class="card-text p-y-1">Objectifs du projet:{{$mission->objectif_projet}}</p>
              <p class="card-text p-y-1">Description du projet:{{$mission->description_projet}}</p>
              <p class="card-text p-y-1 text-muted">Domaines d'expertise sollicite: {{$mission->services_sollicites}}</p>
              <p class="card-text p-y-1 text-muted">Date de debut: {{$mission->date_debut}}</p>
              <p class="card-text p-y-1 text-muted">Date de fin: {{$mission->date_fin}}</p>
              <a href="#" class="card-link btn btn-info"><i class="fa fa-eye"></i></a>
              <a href="#" class="card-link btn btn-danger"><i class="fa fa-solid fa-trash"></i></a>
            </div>
          </div>
        </div>
       
        @endforeach
       
        
      </div>
    </div>
  </div>


@endsection