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
        <form action="/api/users" method="POST" class="col-md-3">
        @csrf
            <div class="d-flex justify-content-center align-items-center">
                <img class="logo-img" src="{{ asset('assets/img/gym-logo.png') }}">
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <h4 style="color: #fff !important;">Cadastrar</h4>
            </div>
            <div class="col mb-3">
                <input type="text" class="form-control" name="first_name" placeholder="Nome" aria-label="First name">
            </div>
            <div class="col mb-3">
                <input type="text" class="form-control" name="last_name" placeholder="Sobrenome" aria-label="Last name">
            </div>

            <div class="col mb-3">
                <input type="email" class="form-control" name="email"  aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="col mb-3">
                <input type="password" class="form-control" name="password" placeholder="Senha">
            </div>
            <button type="submit" style="border: none !important;" class="btn btn-login btn-primary col-md-12">Cadastrar</button>
            <div class="d-flex justify-content-center align-items-center">
                <a href="{{ url('/api/login') }}" style="text-decoration:none" class="btn btn-link">Login</a>
            </div>
        </form>
    </div>

</body>

</html>