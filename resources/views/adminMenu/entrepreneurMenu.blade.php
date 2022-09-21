@extends('layouts.DashboardLayout')
@section('entrepreneurMenu')
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">LES ENTREPRISES  $ ENTREPRENEURS</h3>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">ID</th>
                                            <th class="border-top-0">Nom de l'entreprise</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Domaine d'activite</th>
                                            <th class="border-top-0">Numero de telephone</th>
                                            <th class="border-top-0">CV</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        @foreach($entreprises as $entreprise)
                                        <tr>
                                            <td>{{$entreprise->id}}</td>
                                            <td>{{$entreprise->nom}}</td>
                                            <td>{{$entreprise->email}}</td>
                                            <td>{{$entreprise->domaine_expertise}}</td>
                                            <td>{{$entreprise->phone}}</td>
                                            <td><a href="/cv">Telecharger le cv</a></td>
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