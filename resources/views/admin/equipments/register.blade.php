@extends('admin/admin-layout')

@section('content')
<div class="d-flex justify-content-start">
  <h1>Cadastrar novo</h1>
</div>
<div class="container">
  <form action="/api/equipments/register" method="POST" class="row justify-content-center g-3">
    <div class="col-md-6">
      <div class="row g-12" style="margin: 20px;">
        <div class="col">
          <input type="text" class="form-control" name="name" placeholder="Aparelho" aria-label="name">
        </div>
        <div class="col">
          <input type="number" class="form-control" name="quantity" placeholder="Quantidade" aria-label="quantity">
        </div>
        
      </div>
      <div class="row g-12" style="margin: 20px;">
        <div class="col">
          <input type="text" class="form-control" name="color" placeholder="Cor" aria-label="color">
        </div>
        <div class="col">
          <input type="text" class="form-control" name="manufacturer" placeholder="Fabricante" aria-label="manufacturer">
        </div>
      </div>
      <div class="row g-12" style="margin: 20px;">
        <div class="col">
          <input type="text" class="form-control" name="weight" placeholder="Peso" aria-label="weight">
        </div>
        <div class="col">
          <select class="form-control" id="select" name="type" placeholder="Tipo" aria-label="type">
            <option disabled selected>Selecione um tipo</option>
            <option>Cardiovascular</option>
            <option>Musculação</option>
          </select>
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