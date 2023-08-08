@extends('admin/admin-layout')

@section('content')
<div class="d-flex justify-content-start mt-4">
  <h1>Lista de Aparelhos</h1>
</div>
<div class="container">
  <div class="row justify-content-center align-items-center"> <!-- Adicione a classe align-items-center aqui -->
    <table class="table table-striped">
      <thead>
        <tr>
          <th class="table-light">Nome do Aparelho</th>
          <th class="table-light">Quantidade</th>
          <th class="table-light">Tipo</th>
          <th class="table-light">Peso</th>
          <th class="table-light">Cor</th>
          <th class="table-light">Fabricante</th>
          <th class="table-light">Estado</th>
          <th class="table-light">Danificado</th>
          <th class="table-light">Em manutenção</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($equipments as $equipment)
        <tr>
        <td <?php echo ($equipment->damaged || $equipment->in_maintenance) ? 'style="background-color:#fd7380;"' : '' ?>>{{$equipment->name}}</td>
        <td <?php echo ($equipment->damaged || $equipment->in_maintenance) ? 'style="background-color:#fd7380;"' : '' ?>>{{$equipment->quantity}}</td>
          <td <?php echo ($equipment->damaged || $equipment->in_maintenance) ? 'style="background-color:#fd7380;"' : '' ?>>{{$equipment->type ?? '-'}}</td>
          <td <?php echo ($equipment->damaged || $equipment->in_maintenance) ? 'style="background-color:#fd7380;"' : '' ?>>{{ $equipment->weight ?? '-' }}</td>
          <td <?php echo ($equipment->damaged || $equipment->in_maintenance) ? 'style="background-color:#fd7380;"' : '' ?>>{{$equipment->color ?? '-'}}</td>
          <td <?php echo ($equipment->damaged || $equipment->in_maintenance) ? 'style="background-color:#fd7380;"' : '' ?>>{{$equipment->manufacturer ?? '-'}}</td>
          <td <?php echo ($equipment->damaged || $equipment->in_maintenance) ? 'style="background-color:#fd7380;"' : '' ?>>{{ ($equipment->damaged) || ($equipment->in_maintenance) ? 'Defeituoso' : 'Bom' }}</td>
          <td <?php echo ($equipment->damaged || $equipment->in_maintenance) ? 'style="background-color:#fd7380;"' : '' ?>>{{ ($equipment->damaged) ? 'Sim' : 'Não' }}</td>
          <td <?php echo ($equipment->damaged || $equipment->in_maintenance) ? 'style="background-color:#fd7380;"' : '' ?>>{{ ($equipment->in_maintenance) ? 'Sim' : 'Não' }}</td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
    
    <div class="d-flex justify-content-center">
      <nav aria-label="Navegação de página exemplo">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="{{ $equipments->previousPageUrl() }}" rel="prev" aria-label="Anterior">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Anterior</span>
            </a>
          </li>
          @foreach ($equipments->getUrlRange(1, $equipments->lastPage()) as $page => $url)
          @if ($page === $equipments->currentPage())
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
            <a class="page-link" href="{{ $equipments->nextPageUrl() }}" aria-label="Próximo">
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