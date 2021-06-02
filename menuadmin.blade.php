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
    
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <div class="dropdown">
  <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
  <a class="btn" href="#"><img src="images/user.png" width="35" alt="" ></a>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="{{ url('/profiladmin') }}">Profil</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="{{ url('/home') }}">Log Out</a></li>
  </ul>
</div>
            </li>
        </ul>
    </div>
  </div>
</nav>

<!--Halaman-->
<section class="tournament mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
            <div class="tennis">
            <div class="card" style="width: 20rem;">
                <div class="card-body mt-3">
                  <h5 class="card-title">Pemberitahuan Warga Gampong</h5>
                  <a href="{{ url('/pemberitahuanadmin') }}" class="btn btn-primary d-grid gap-2 mx-auto">Go Somewhere</a>
                </div>
              </div>
            </div>
    </div>
            <div class="col">
            <div class="badminton">
              <div class="card" style="width: 20rem;">
         
                <div class="card-body mt-3">
                  <h5 class="card-title ">Aktivitas Warga Gampong</h5>
                  <a href="{{ url('/aktivitasadmin') }}" class="btn btn-primary d-grid gap-2 mx-auto">Go Somewhere</a>
                </div>
              </div>
            </div>
    </div>
</section>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>