@extends('layouts.DashboardLayout')
@section('entrepriseMenu')
@dd($prestataires)
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                @if($message = Session::get('success'))
                        <div class="alert alert-info alert-block">
                            
                            <strong>{{$message}}</strong>
                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                        </div>

                @endif
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">LES PRESTATAIRES</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Noms et prenoms du representant legal </th>
                                            <th class="border-top-0">Noms et prenoms du representant juridique </th>
                                            <th class="border-top-0">Domaine d'intervention</th>
                                            <th class="border-top-0">references</th>
                                            <th class="border-top-0">Email</th>
                                           
                                            <th class="border-top-0">Effectif de l'equipe d'intervention</th>
                                            <th class="border-top-0">Numero de telephone</th>
                                            <th class="border-top-0">Annees d'experience</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach($prestataires as $prestataire)
                                        <tr>
                                            <td>{{$prestataire->id}}</td>
                                            <td>{{$prestataire->nom}}</td>
                                            <td>{{$prestataire->prenom}}</td>
                                            <td>{{$prestataire->domaine_expertise}}</td>
                                            <td>{{$prestataire->references}}</td>
                                            <td>{{$prestataire->email}}</td>
                                            
                                            
                                            <td>{{$prestataire->effectif_equipe}}</td>
                                            <td>{{$prestataire->phone}}</td>
                                            <td>{{$prestataire->annee_experience}}</td>
                                            <td class="d-flex  pl-5">
                                                <a href="{{route('prestataire.show',$prestataire->id)}}" class="btn btn-info ml-2"><i class="fa fa-solid fa-eye "></i></a>
                                               
                                                   
                                                
                                                <button type="submit" class="btn btn-danger" onclick="document.getElementById('modal-open').style.display='block'"><i class="fa fa-solid fa-trash "></i></button>
                                            
                                              
                                            </td>
                                        </tr>
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
                                                    <p>Voulez vous supprimer ce prestataire de services?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{route('prestataire.delete',$prestataire->id)}}" method="POST">
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
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection                