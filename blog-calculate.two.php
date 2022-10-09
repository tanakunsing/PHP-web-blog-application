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
    <title>Resistors</title>
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
                            <figure class="mb-4"><img class="img-fluid rounded" src="images/bg-5.jpg" alt="..." /></figure>
                            <!-- Post content-->
                            
                            <section class="mb-5">
                                <p class="fs-5 mb-4">Resistors are devices used to resist the flow of electricity. It serves to reduce the voltage and limit the flow of electricity in the circuit. Resistors have a different form according to the nature of their implementation.
                                </p>
                                <div class="alert alert-primary" role="alert">
                                        Try out the program, configure it down to 2 fields and calculate it.
                                    </div>
                                <div class="container" style="margin-top: 15px;">
                                    <div class="row">
                                        <div class="col-sm-10">
                                            <select id="box1">
                                                <option value="none"></option>
                                                <option value="black">black</option>
                                                <option value="brown">brown</option>
                                                <option value="red">red</option>
                                                <option value="orange">orange</option>
                                                <option value="yellow">yellow</option>
                                                <option value="green">green</option>
                                                <option value="blue">blue</option>
                                                <option value="purple">purple</option>
                                                <option value="gray">gray</option>
                                                <option value="white">white</option>
                                            </select>
                                            <!-- test -->
                                            <select id="box2" style="margin-left: 30px;">
                                            <option value="none"></option>
                                                <option value="black">black</option>
                                                <option value="brown">brown</option>
                                                <option value="red">red</option>
                                                <option value="orange">orange</option>
                                                <option value="yellow">yellow</option>
                                                <option value="green">green</option>
                                                <option value="blue">blue</option>
                                                <option value="purple">purple</option>
                                                <option value="gray">gray</option>
                                                <option value="white">white</option>
                                            </select>
                                            <select id="box3" style="margin-left: 30px;">
                                            <option value="none"></option>
                                                <option value="black">black</option>
                                                <option value="brown">brown</option>
                                                <option value="red">red</option>
                                                <option value="orange">orange</option>
                                                <option value="yellow">yellow</option>
                                                <option value="green">green</option>
                                                <option value="blue">blue</option>
                                                <option value="purple">purple</option>
                                                <option value="gray">gray</option>
                                                <option value="white">white</option>

                                            </select>
                                            <select id="box4" style="margin-left: 30px;">
                                            <option value="none"></option>
                                               <option value="black">black</option>
                                                <option value="brown">brown</option>
                                                <option value="red">red</option>
                                                <option value="orange">orange</option>
                                                <option value="yellow">yellow</option>
                                                <option value="green">green</option>
                                                <option value="blue">blue</option>
                                                <option value="purple">purple</option>
                                                <option value="gray">gray</option>
                                                <option value="white">white</option>
                                                <option value="gold">gold</option>

                                            </select>
                                            <script src="js/checkcolor.js"></script>
                                          
                                        </div>
                                        
                                        <div class="col-sm-8" style="display: flex;margin-top: 50px;border: 3px outset black;height: 220px;background-color: rgba(247, 244, 244, 0.877);">
                                            <div style="border: 1px outset black;height: 20px;width: 200px;margin-top: 50px;border-right: none;margin-top: 80px;">
                                            </div>
                                            <div style="border: 1px outset black;height: 160px; width: 300px;margin-top: 23px;display: flex;">
                                            </div>
                                            <div style="border: 1px outset black;height: 120px;width: 500px;display: flex;margin-top: 30px;border-left: none;border-right: none;">
                                                <div id="userSelect" style="width: 20px;"></div>
                                                <div id="userSelect1" style="margin-left: 30px; width: 20px;"></div>
                                                <div id="userSelect2" style="margin-left: 10px; width: 20px;"></div>
                                                <div id="userSelect3" style="margin-left: 30px; width: 20px;"></div>

                                            </div>
                                            <div style="border: 1px outset black; height: 160px; width: 300px;margin-top: 20px;"></div>
                                            <div style="border: 1px outset black;height: 20px;width: 200px;margin-top: 50px;border-left: none;margin-top: 80px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p id="cl1"></p>
                                <div class="col-sm-6" style="margin-left: 100px;">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">color </label>
                                        <input type="text" class="form-control" id="cl12" placeholder="bar 1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">color </label>
                                        <input type="text" class="form-control" id="cl13" placeholder="bar 2">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">color </label>
                                        <input type="text" class="form-control" id="cl14" placeholder="bar 3">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">color </label>
                                        <input type="text" class="form-control" id="cl15" placeholder="bar 4">
                                    </div>
                                </div>
                               
                        </article>
                        <!-- Comments section-->
                        
                    </div>

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