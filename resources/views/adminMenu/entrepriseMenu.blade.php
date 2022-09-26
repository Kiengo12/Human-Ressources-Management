@extends('layouts.DashboardLayout')
@section('entrepriseMenu')

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
                            <h3 class="box-title">LES ENTREPRISES</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Nom de l'entreprise</th>
                                            <th class="border-top-0">Nom du representant legal</th>
                                            
                                            
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Numero de telephone</th>
                                            <th class="border-top-0">Domaine d'action</th>
                                            <th class="border-top-0">Description de l'entreprise</th>
                                            <th class="border-top-0">Forme juridique</th>
                                            <th class="border-top-0">Nombre d'annees d'existence</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach($entreprises as $entreprise)
                                        <tr>
                                            <td>{{$entreprise->id}}</td>
                                            <td>{{$entreprise->nom_entreprise}}</td>
                                            <td>{{$entreprise->nom}}</td>
                                            
                                            
                                            <td>{{$entreprise->email}}</td>
                                            <td>{{$entreprise->phone}}</td>
                                            <td>{{$entreprise->domaine_expertise}}</td>
                                            <td>{{$entreprise->resume}}</td>
                                            <td>{{$entreprise->type_entreprise}}</td>
                                            <td>{{$entreprise->annee_experience}}</td>
                                            <td class="d-flex  pl-5">
                                                <a href="{{route('entreprise.show',$entreprise->id)}}" class="btn btn-info ml-2"><i class="fa fa-solid fa-eye "></i></a>
                                                
                                                <button type="submit" class="btn btn-danger" onclick="document.getElementById('modal-open').style.display='block'" data-bs-dismiss="modal"><i class="fa fa-solid fa-trash "></i></button>
                                              
                                                
                                                
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
                                                    <p>Voulez vous supprimer cette entreprise?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <form action="{{route('entreprise.delete',$entreprise->id)}}" method="POST">
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