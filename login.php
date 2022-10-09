<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<style>
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

  .login-page {
    width: 360px;
    padding: 8% 0 0;
    margin: auto;
  }

  .form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  }

  .form input {
    font-family: "Roboto", sans-serif;
    outline: 0;
    background: #f2f2f2;
    width: 100%;
    border: 0;
    margin: 0 0 15px;
    padding: 15px;
    box-sizing: border-box;
    font-size: 14px;
  }

  .form button {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #1578E9;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
  }

  .form button:hover,
  .form button:active,
  .form button:focus {
    background: #43A047;
  }

  .form .message {
    margin: 15px 0 0;
    color: #1C1C1C;
    font-size: 12px;
  }

  .form .message a {
    color: #1578E9;
    text-decoration: none;
  }

  .form .register-form {
    display: none;
  }

  .container {
    position: relative;
    z-index: 1;
    max-width: 300px;
    margin: 0 auto;
  }

  .container:before,
  .container:after {
    content: "";
    display: block;
    clear: both;
  }

  .container .info {
    margin: 50px auto;
    text-align: center;
  }

  .container .info h1 {
    margin: 0 0 15px;
    padding: 0;
    font-size: 36px;
    font-weight: 300;
    color: #1a1a1a;
  }

  .container .info span {
    color: #4d4d4d;
    font-size: 12px;
  }

  .container .info span a {
    color: #000000;
    text-decoration: none;
  }

  .container .info span .fa {
    color: #EF3B3A;
  }

  body {
    background: #76b852;
    /* fallback for old browsers */
    background: rgb(141, 194, 111);
    background: linear-gradient(90deg, rgba(28, 28, 28, 1) 0%, rgba(28, 28, 28, 1) 50%);
    font-family: "Roboto", sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
</style>
<?php
// Start the session
session_start();
?>
<?php
include 'classes/db.class.php';
include 'classes/login.class.php';


$gdb = new dbh();
$gchk = new loginup();

if (isset($_POST['submit'])) {
  $username = $_POST['email'];
  $password = $_POST['Password'];
  $rem = $_POST['rem'];

  $gchk->checkuser($username, $password, $gdb->connecting(),$rem);
}
?>

<body>
  <div class="login-page">

    <div class="form">
      <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="email" name="email" placeholder="Email" value="<?php if(isset($_COOKIE['ur_email'])){echo $_COOKIE['ur_email'];} ?>" />
        <input type="Password" name="Password" placeholder="password" value="<?php if(isset($_COOKIE['ur_pass'])){echo $_COOKIE['ur_pass'];}?>"/>
        <?php echo $gchk->getress(); ?>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="rem" <?php if(isset($_COOKIE['ur_email'])){?>  checked  <?php } ?> id="flexCheck" >
          <label class="form-check-label" for="remember">
            Remember now
          </label>
        </div>
        <button name="submit" type="Submit">login</button>
        <h2 class="message">Not registered? <a href="registor.php">Create an account</a></h2>
      </form>
    </div>
  </div>
  <script>
    $('.message a').click(function() {
      $('form').animate({
        height: "toggle",
        opacity: "toggle"
      }, "slow");
    });
  </script>
</body>

</html>