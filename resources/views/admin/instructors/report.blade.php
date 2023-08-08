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
          <th class="table-light">Nome do Instrutor</th>
          <th class="table-light">Especialidade</th>
          <th class="table-light">Contato</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($instructors as $instructor)
        <tr>
        <td>{{$instructor->user->first_name . ' ' . $instructor->user->last_name}}</td>
        <td>{{$instructor->specialty}}</td> 
        <td>{{$instructor->user->email}}</td> 
        </tr>
        @endforeach
      </tbody>
    </table>
    
    <div class="d-flex justify-content-center">
      <nav aria-label="Navegação de página exemplo">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="{{ $instructors->previousPageUrl() }}" rel="prev" aria-label="Anterior">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Anterior</span>
            </a>
          </li>
          @foreach ($instructors->getUrlRange(1, $instructors->lastPage()) as $page => $url)
          @if ($page === $instructors->currentPage())
          <li class="page-item active">
            <span class="page-link">{{ $page }}</span>
          </li>
          @else
          <li class="page-item">
            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
          </li>
          @endif
          @endforeach
          <li class="page-item">
            <a class="page-link" href="{{ $instructors->nextPageUrl() }}" aria-label="Próximo">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Próximo</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
@endsection