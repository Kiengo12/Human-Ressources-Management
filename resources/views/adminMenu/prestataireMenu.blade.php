@extends('layouts.DashboardLayout')
@section('entrepriseMenu')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">LES PRESTATAIRES</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Nom </th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Domaine d'activite</th>
                                            <th class="border-top-0">Numero de telephone</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach($prestataires as $prestataire)
                                        <tr>
                                            <td>{{$prestataire->id}}</td>
                                            <td>{{$prestataire->nom}}</td>
                                            <td>{{$prestataire->email}}</td>
                                            <td>{{$prestataire->domaine_expertise}}</td>
                                            <td>{{$prestataire->phone}}</td>
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