<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Hotel Hebat</title>

 <!-- bootstrap & css -->
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">

 <!-- cdn fontawesome -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>
<div class="container">

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Hotel Hebat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="d-flex">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link btn btn-warning" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kamar/kamar.php">Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fasilitas/fasilitas.php">Fasilitas</a>
        </li>
      </ul>
    </div>
    </div>
  </div>
</nav>
<!-- end header -->
</div> <!-- end container -->
 
 
<!-- jumbotron -->
<div class="jumbotron jumbotron-fluid ">
</div>
<!-- end jumbotron -->


<!-- fitur -->
<div class="container-fluid col-10">

 <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
  <div class="col">
   <label for=""><h5><i class="bi bi-calendar-event"></i> Tanggal Cek In</h5></label>
   <input type="text" class="form-control">
  </div>

  <div class="col">
   <label for=""><h5><i class="bi bi-calendar-event"></i> Tanggal Cek Out</h5></label>
   <input type="text" class="form-control">
  </div>

  <div class="col">
   <label for=""><h5><i class="bi bi-door-open-fill"></i> Jumlah Kamar</h5></label>
   <input type="text" class="form-control">
  </div>

  <div class="col">
   <a href="pesan/pesan.php" class="btn btn-primary">Pesan</a>
  </div>
 </div>

</div>
<!-- end fitur --> 
</body>
</html>

<!-- Script Js -->
<script src="js/bootstrap.min.js"></script>