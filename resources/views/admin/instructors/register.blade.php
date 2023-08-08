@extends('admin/admin-layout')

@section('content')
<div class="d-flex justify-content-start">
  <h1>Cadastrar Instrutor</h1>
</div>
<div class="container">
  <form action="/api/instructors/register" method="POST" class="row justify-content-center g-3">
    <div class="col-md-6">
      <div class="row g-12" style="margin: 20px;">
        <div class="col">
          <input type="text" class="form-control" name="first_name" placeholder="Nome" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="last_name" placeholder="Sobrenome" aria-label="Last name">
        </div>
      </div>
      <div class="row g-12" style="margin: 20px;">
        <div class="col">
          <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="speciality" placeholder="Especialidade" aria-label="speciality">
        </div>
      </div>
      <div style="margin: 20px;">
        <div class="col">
          <button type="submit" style="border: none !important; " class="btn btn-primary col-12 btn-block">Cadastrar</button>
        </div>
      </div>
    </div>
  </form>

</div>
@endsection