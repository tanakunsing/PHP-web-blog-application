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
    <title>Ohm’s Law</title>
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
                                <div class="fw-bold">Valerie Luna</div>
                                <div class="text-muted">News, Business</div>
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
                            <figure class="mb-4"><img class="img-fluid rounded" src="images/bg-3.png" style="height: 600px;width: 600px;" alt="..." /></figure>



                            </form>
                            <!-- Post content-->
                            <section class="mb-5">
                                <p class="fs-5 mb-4">Ohm’s Law</p>
                                <p class="fs-5 mb-4">It is used to describe the relationship between electricity and electrical potential differences, and current and resistance, i.e., the current flowing through any conductor is directly variable to the potential difference (voltage or voltage drop). is that the current is more or less valued according to that potential difference.</p>
                                <div class="col-lg-6" style="margin-left: 100px;">
                                    <div class="alert alert-primary" role="alert">
                                        Try out the program, configure it down to 2 fields and calculate it.
                                    </div>
                                    <form>
                                        <div class="form-group mb-3">
                                            <!-- voltage ---------------------------------------->
                                            <label for="email">voltage</label>
                                            <input type="number" class="form-control" id="vol">
                                        </div>
                                        <!-- current ---------------------------------------->
                                        <div class="form-group mb-3">
                                            <label for="pwd">Current</label>
                                            <input type="number" class="form-control" id="cur">
                                        </div>
                                        <!-- resistor ---------------------------------------->
                                        <div class="form-group mb-3">
                                            <label for="pwd">Resistor</label>
                                            <input type="number" class="form-control" id="ret">
                                        </div>
                                        <!-- Power ---------------------------------------->
                                        <div class="form-group mb-3">
                                            <label for="pwd">Power</label>
                                            <input type="number" class="form-control" id="pwr">
                                        </div>
                                        <button type="button" class="btn btn-primary mb-3" onclick="myfunction()">calculate</button>
                                        <button type="button" class="btn btn-link" style="font-size: 20px;" onclick="myreset()">reset</button>
                                        <script src="js/ohm.js"></script>
                                </div>
                                <p class="fs-5 mb-4">Ohm's law explains that the current in a circuit increases in value. If the pressure at the source And vice versa, if the power supply is constant. The electricity will be reduced. When the resistance value in the electrical circuit is greater. Ohm's law relation</p>


                            </section>

                        </article>
                        <!-- Comments section-->
                     
    </main>
    <!-- Footer-->
    <?php include 'footer.php'; ?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>