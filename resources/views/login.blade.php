@extends('layouts.app')
@push('styles')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endpush

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Restante das tags head -->

    @stack('styles')
</head>

<body>
    <div class="container container-box d-flex justify-content-center align-items-center vh-100">
        <form class="col-md-3">
            <div class="d-flex justify-content-center align-items-center">
                <img class="logo-img" src="{{ asset('assets/img/gym-logo.png') }}">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <h4 style="color: #fff !important;">Login</h4>
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <button type="submit" style="border: none !important;" class="btn btn-login btn-primary col-md-12">Login</button>
            <div class="d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-link"></button>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ url('/register') }}" style="text-decoration:none" class="btn btn-link">Cadastrar</a>
                </div>
            </div>
        </form>



    </div>

</body>

</html>