@extends('layouts.loginLayout');
@section('login')

<form method="POST" action="/login">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="email" placeholder="password" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="submit" value="Se connecter" class="btn btn-info">
                        <div class="submitting"></div>
                    </div>
               </div>
               <p class="footer text-center">Pas encore inscrit? <a href="/postulant">S'inscrire</a></p>
            </div>   
</form>
@endsection            