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
        <title>blog-home</title>
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
                <div class="container px-5">
                    <h1 class="fw-bolder fs-5 mb-4">Company Blog</h1>
                    <div class="card border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-body p-0">
                            <div class="row gx-0">
                                <div class="col-lg-6 col-xl-5 py-lg-5">
                                    <div class="p-4 p-md-5">
                                         <div class="badge bg-primary bg-gradient rounded-pill mb-2" >Media</div>
                                        <div class="h2 fw-bolder">Ohm’s Law</div>
                                        <p>explains that the current in a circuit increases in value. If the pressure at the source And vice versa, if the power supply is constant. The electricity will be reduced. When the resistance value in the electrical circuit is greater...</p>
                                        <a class="stretched-link text-decoration-none" href="blog-calculate.thr.php">
                                            Read more
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-7"><div ><img class="bg-featured-blog" src="images/bg-3.png" style="height: 480px;width: 500px;"></div></div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            
            <section class="py-5">
                <div class="container px-5">
                    <h2 class="fw-bolder fs-5 mb-4">Featured Stories</h2>
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="images/bg-5.jpg" alt="..." />
                                <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2" >Media</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="blog-calculate.thr.php"><div class="h5 card-title mb-3">Resistors</div></a>
                                    <p class="card-text mb-0">Resistors are devices used to resist the flow of electricity. </p>
                                    
                                </div>
                                <a class="stretched-link text-decoration-none" href="blog-calculate.two.php">
                                            Read more
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="images/bg-4.jpg" alt="..." />
                                <div class="card-body p-4">
                                   
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#"><div class="h5 card-title mb-3">Capacitor</div></a>
                                    <p class="card-text mb-0">Capacitors are one of the most widely used electronic devices. It is responsible for storing and discharging electric charge...</p>
                                    
                                </div>
                                <a class="stretched-link text-decoration-none" href="blog-calculate.one.php">
                                            Read more
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                            </div>
                        </div>
                    </div>
                    <div class="text-end mb-5 mb-xl-0">
                        <a class="text-decoration-none" href="#!">
                            More stories
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </section>
           
       
        </main>
        <!-- Footer-->
        <?php include 'footer.php';?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
