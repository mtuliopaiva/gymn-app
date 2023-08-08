@extends('admin/admin-layout')

@section('content')
<div class="d-flex justify-content-start mt-4">
  <h1>Lista de Instrutores</h1>
</div>
<div class="container">
  <div class="row justify-content-center align-items-center"> <!-- Adicione a classe align-items-center aqui -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th class="table-light">Nome do Aluno</th>
          <th class="table-light">Objetivo</th>
          <th class="table-light">Contato</th>
          <th class="table-light">Plano</th>
          <th class="table-light">Data da matrícula</th>
          <th class="table-light">Data do cancelamento</th>

        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
    

  </div>
</div>
@endsection