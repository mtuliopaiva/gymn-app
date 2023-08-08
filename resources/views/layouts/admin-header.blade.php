<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gym-app</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="row w-100 align-items-center">

        <!-- Logo -->
        <div class="col-4 d-flex align-items-center" style="color:#fff;">
          <img class="logo-img mr-2" src="{{ asset('assets/img/gym-logo.png') }}" width="75" height="75" alt="">
        </div>

        <!-- Menu itens -->
        <div class="col-6 d-flex align-items-center">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <div class=" col-1 dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownEquipButton" data-bs-toggle="dropdown" aria-expanded="false">
                  Equipamentos
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownEquipButton">
                  <li><a class="dropdown-item" href="{{ route('admin.equipments.report') }}">Relatório</a></li>
                  <li><a class="dropdown-item" href="{{ route('admin.equipments.register') }}">Cadastrar novo</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <div class=" col-1 dropdown">

                <a class="nav-link dropdown-toggle" type="button" id="dropdownInstructorButton" data-bs-toggle="dropdown" aria-expanded="false">
                  Instrutores
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownInstructorButton">
                  <li><a class="dropdown-item" href="{{ route('admin.instructors.report') }}">Relatório</a></li>
                  <li><a class="dropdown-item" href="{{ route('admin.instructors.register') }}">Cadastrar novo</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.students.report') }}">Alunos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Fale conosco</a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Profile data -->
      <div class=" col-1 dropdown">
        <button style="color: #fff;" class="btn dropdown-toggle" type="button" id="dropdownProfileButton" data-bs-toggle="dropdown" aria-expanded="false">
          Administrador
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownProfileButton">
          <li><a class="dropdown-item" href="#">Perfil</a></li>
          <li><a class="dropdown-item" href="#">Sair</a></li>
        </ul>
      </div>
      <div class="col-1" style="color:#fff;">
        <img src="{{ asset('assets/img/profile-unknow.png') }}" alt="..." style="width: 50px; height: 50px; border-radius:50%;">
      </div>
      </div>
      </div>
    </nav>
  </header>
</body>

</html>