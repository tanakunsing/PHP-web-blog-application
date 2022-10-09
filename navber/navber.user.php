<?php 
 if(isset($_POST['btn-nv'])){
    session_reset();
    session_unset();
    session_destroy();
    unset($_SESSION['email']);


    header("Location: index.php"); 
 }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="User.php">electroniX</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            
                            <li class="nav-item"><a class="nav-link" href="User.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-home.php">blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                            <form method="POST" action="<?php $_SERVER['PHP_SELF'];?>">
                            <input type="submit" name="btn-nv" class="nav-item" class="nav-link" value="Logout" >
                            </form>
                
                        </ul>
                    </div>
                </div>
            </nav>