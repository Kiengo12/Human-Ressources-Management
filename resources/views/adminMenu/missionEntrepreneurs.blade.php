@extends('layouts.dashboardLayout')
@section('mission')


<div class="card white-box p-0">
    <div class="card-body">
        <h3 class="box-title mb-0">Les missions</h3>
    </div>
</div> 
@if($message = Session::get('success'))
  <div class="alert alert-info alert-block">
                            
     <strong>{{$message}}</strong>
      <i class="fa-sharp fa-solid fa-circle-check"></i>
  </div>

@endif



  <div class="col-md-12">
    <div class="container">
      <div class="row hidden-md-up">
        @foreach($missions as $mission)
        <div class="col-md-4">
          <div class="card shadow-sm p-1  bg-white rounded">
            <div class="card-block p-4">
              <h4 class="card-title"><b>{{$mission->titre_mission}}</b></h4>
              <p class="card-text p-y-1">Cout estimatif du projet: {{$mission->cout_projet}}</p>
              <p class="card-text p-y-1">Objectifs du projet: {{$mission->objectif_projet}}</p>
              <p class="card-text p-y-1">Description du projet: {{$mission->description_projet}}</p>
              <p class="card-text p-y-1 text-muted">Domaines d'expertise sollicite: {{$mission->services_sollicites}}</p>
              <p class="card-text p-y-1 text-muted">Date de debut: {{$mission->date_debut}}</p>
              <p class="card-text p-y-1 text-muted">Date de fin: {{$mission->date_fin}}</p>
              <p class="card-text p-y-1 text-muted">identifiant du demandeur: {{$mission->id_auth}}</p>
              <!--<a href="" class="card-link btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>-->
             
              <button type="button" class="btn btn-danger" onclick="document.getElementById('modal-open').style.display='block'"><i class="fa fa-solid fa-trash "></i></button>
              
            </div>
          </div>
        </div>
        <div class="modal" id="modal-open">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">La suppression est irreversible</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  onclick="document.getElementById('modal-open').style.display='none'">
                  <span aria-hidden="true"></span>
                </button>
              </div>
              <div class="modal-body">
                <p>Voulez vous supprimer cette mission?</p>
              </div>
              <div class="modal-footer">
                <form action="{{route('missionEntrepreneur.delete',$mission->id)}}" method="POST">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>  
                <button type="button" class="btn btn-info" onclick="document.getElementById('modal-open').style.display='none'" data-bs-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
       
        
      </div>
    </div>
  </div>


@endsection