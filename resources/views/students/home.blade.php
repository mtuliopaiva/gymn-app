@extends('layout')

@section('content')
<h1>Bem-vindo à página inicial!</h1>
<p>Este é o conteúdo principal da página.</p>
<div class="row">
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        Um card
      </div>
      <div class="card-body">
        <h5 class="card-title">Musculação</h5>
        <p class="card-text">Texto de exemplo.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        Outro card
      </div>
      <div class="card-body">
        <h5 class="card-title">Título do card</h5>
        <p class="card-text">Texto de exemplo.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        Mais um card
      </div>
      <div class="card-body">
        <h5 class="card-title">Título do card</h5>
        <p class="card-text">Texto de exemplo.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>

@endsection