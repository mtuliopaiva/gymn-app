@extends('admin/admin-layout')

@section('content')
<div class="d-flex justify-content-start">
  <h1>Bem-vindo à página inicial!</h1>
</div>
<p>Este é o conteúdo principal da página.</p>

<div class="container">
  <div class="row justify-content-center">
    <div class="shadow card mb-3" style="max-width: 540px; margin: 0 20px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="logo-img mr-2" src="{{ asset('assets/img/profit.png') }}" width="100%" height="100%" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Faturamento</h5>
            <p class="card-text">Mensal: R$ 6800</p>
            <p class="card-text">Anual: R$ 44000</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow card mb-3" style="max-width: 540px; margin: 0 20px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="logo-img mr-2" src="{{ asset('assets/img/weight.png') }}" width="100%" height="100%" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Equipamentos</h5>
            <p class="card-text">Cadastrados: <?=$totalEquipments?> </p> 
            <p class="card-text">Danificados: <?=$damagedEquipments?> </p>
            <p class="card-text">Em manutenção: <?=$inMaintenanceEquipments?></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>

    <div class="shadow card mb-3" style="max-width: 540px; margin: 0 20px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="logo-img mr-2" src="{{ asset('assets/img/student.png') }}" width="100%" height="100%" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Alunos</h5>
            <p class="card-text">Cadastrados:</p>
            <p class="card-text">Matriculados/mês:</p>
            <p class="card-text">Cancelamentos/mês:</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>

    <div class="shadow card mb-3" style="max-width: 540px; margin: 0 20px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="logo-img mr-2" src="{{ asset('assets/img/weightbalance.png') }}" width="100%" height="100%" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Instrutores</h5>
            <p class="card-text">Ativos: <?=$totalInstructors?></p>
            <p class="card-text">Instrutores/Alunos: <?=0?></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>

    <div class="shadow card mb-3" style="max-width: 540px; margin: 0 20px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="logo-img mr-2" src="{{ asset('assets/img/personal-trainer.png') }}" width="100%" height="100%" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Personal trainers</h5>
            <p class="card-text">Ativos:</p>
            <p class="card-text">Instrutores/Alunos:</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow card mb-3" style="max-width: 540px; margin: 0 20px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img class="logo-img mr-2" src="{{ asset('assets/img/clean.png') }}" width="100%" height="100%" alt="">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Equipe de limpeza</h5>
            <p class="card-text">Ativos:</p>
            <p class="card-text">Instrutores/Alunos:</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection