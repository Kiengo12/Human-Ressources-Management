@extends('layouts.DashboardLayout')
@section('entrepriseMenu')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">LES CANDIDATS POSTULANTS</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Nom</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Domaine d'activite</th>
                                            <th class="border-top-0">Numero de telephone</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach($postulants as $postulant)
                                        <tr>
                                            <td>{{$postulant->id}}</td>
                                            <td>{{$postulant->nom}}</td>
                                            <td>{{$postulant->email}}</td>
                                            <td>{{$postulant->domaine_expertise}}</td>
                                            <td>{{$postulant->phone}}</td>
                                            <td>action</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
@endsection                