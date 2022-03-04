<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>JOWLWEB - My Dashboard</title>
  <!-- Bootstrap css and js -->
  <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/features.css" rel="stylesheet">
  <link href="assets/heroes.css" rel="stylesheet">
  <link href="assets/carousel.css" rel="stylesheet">
  <link href="assets/footers.css" rel="stylesheet">
  <link href="assets/app.css" rel="stylesheet">
  <!-- menukit css and js  -->
  <link href="assets/aos.css" rel="stylesheet">
  <!-- ======= Bpptstrap icons ======== -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
  <style type="text/css">
    body {
      min-height: 75rem;
      padding-top: 4.5rem;
    }
    p {
      text-align: justify;
    }
  </style>
</head>
<body class="ilsvg4">
  <header class="section-header">
   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-4">
    <div class="container">
      <a class="navbar-brand"><img src="sources/pruebasjowl2.png" class="img-responsive" width="50" height="50"> <strong>JOWLWEB</strong></a> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav3">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="main_nav3">
        <ul class="navbar-nav mx-auto">
        </ul>
      </div> <!-- navbar-collapse.// -->
    </div> <!-- container.// -->
  </nav>
</header>
<!-- section-header.// -->
<div class="container-fluid">
  <br>
  <?php 
  include 'dbround.php';
  $stmt = $mysqli->prepare("SELECT * FROM country");
  $stmt->execute();
  $result = $stmt->get_result(); ?>
  <div class="container">
    <form>
      <select class="form-select" id="country">
        <option selected>Select</option>
        <?php while ($row = $result->fetch_assoc()) { ?>
          <option><?=$row['nicename']?></option>
        <?php } ?>
      </select>
      <hr>
      <button type="button" class="btn btn-info" onclick="search()">Search</button>
    </form>
  </div>
  <br>
  <div id="contentapi" class="text-light container">
  </div>
  <footer class="text-light d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0">&copy; 2022 José Martínez - Developer</p>
    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>
    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-light" target="_blank" href="https://www.facebook.com/jose.d.martinez.351/"><i class="bi bi-facebook"></i></a></li>
      <li class="ms-3"><a class="text-light" target="_blank" href="https://www.instagram.com/josedmo_ve/"><i class="bi bi-instagram"></i></a></li>
      <li class="ms-3"><a class="text-light" target="_blank" href="https://www.linkedin.com/in/jos%C3%A9-mart%C3%ADnez-48a27515b"><i class="bi bi-linkedin"></i></a></li>
    </ul>
  </footer>
</div>
<script src="assets/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true
  });
</script>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/jquery-3.2.1.js"></script>
<script src="corejs.js"></script>
</body>
</html>