<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Capacitor</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column">
  <main class="flex-shrink-0">
    <!-- Navigation-->
    <?php
    include 'classes/check.class.php';
    $st = new checkall();
    include $st->checknav();
    ?>
    <!-- Page Content-->
    <section class="py-5">
      <div class="container px-5 my-5">
        <div class="row gx-5">
          <div class="col-lg-3">
            <div class="d-flex align-items-center mt-lg-5 mb-4">
              <img class="img-fluid rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." />
              <div class="ms-3">
                <div class="fw-bold">Tanakun Singkhen</div>
                <div class="text-muted">News, Our founding</div>
              </div>
            </div>
          </div>
          <div class="col-lg-9">
            <!-- Post content-->
            <article>
              <!-- Post header-->
              <header class="mb-4">
                <!-- Post title-->
                <h1 class="fw-bolder mb-1">Welcome to Blog Post!</h1>
                <!-- Post meta content-->
                <div class="text-muted fst-italic mb-2">January 1, 2022</div>
                <!-- Post categories-->
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
              </header>
              <!-- Preview image figure-->
              <figure class="mb-4"><img class="img-fluid rounded" src="images/bg-4.jpg" alt="..." /></figure>
              <!-- Post content-->
              <section class="mb-5">
                <p class="fs-5 mb-4">Capacitors are one of the most widely used electronic devices. It is responsible for storing and discharging electric charge.
                  structural features It consists of 2 electrodes connected to the plate with an insulator (dielectric) in the middle.</p>
                <p class="fs-5 mb-4">charging and discharging or discharging It is similar to charging the battery. When the capacitor is connected to electricity The electrons run to both plates. When we want to discharge the capacitor, it can be done by connecting the legs of the two capacitors to collide. or can be connected through a circuit Although the appearance is similar to the battery But the capacitor duration is very short.
                </p>
                <p class="fs-5 mb-4">
                  Capacitor type
                  We can divide it in many ways. Here, it will be divided according to the poles.
                 </p>
                 <p class="fs-5 mb-4"> - terminal</p>
                 <p class="fs-5 mb-4">- without terminal</p>
                  
                <div class="container">

                </div>
              </section>
            </article>
            <!-- Comments section-->
          
  </main>
  <!-- Footer-->
  <footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
        <div class="col-auto">
          <div class="small m-0 text-white">Copyright &copy; Your Website 2022</div>
        </div>
        <div class="col-auto">
          <a class="link-light small" href="#!">Privacy</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="#!">Terms</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="#!">Contact</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>