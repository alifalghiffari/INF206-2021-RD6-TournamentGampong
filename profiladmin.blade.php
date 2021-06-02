<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<!--navigasi-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <a class="navbar-brand">
        <img src="images/Green and Red Diagonal Lines Sports Logo.png" width="74" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/menuadmin') }}">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/aktivitasadmin') }}">Aktivitas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/pemberitahuanadmin') }}">Pemberitahuan</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <div class="dropdown">
  <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <a class="btn" href="#"><img src="images/user.png" width="35" alt=""></a>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="{{ url('/profiladmin') }}">Profil</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="/home">Log Out</a></li>
  </ul>
</div>
            </li>
        </ul>
    </div>
  </div>


<!--form profil-->
<div class="card" >
<div class="profil">
  <img src="images\user.png"  style="margin-left: 9.5em;margin-top: 1em;" width="100"  height="100"  >
  <div class="card-body" >
    <h5 class="card-title">PROFIL</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Nama     :               </li>
    <li class="list-group-item">Email    :               </li>
    <li class="list-group-item">Nik      :               </li>
    <li class="list-group-item">Nip      :               </li>
    <li class="list-group-item">Gampong  :               </li>
    <li class="list-group-item">Kode Pos :               </li>
  </ul>
</div>
</div>
</body>
</html>