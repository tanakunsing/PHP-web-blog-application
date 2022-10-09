<?php

class loginup
{

  public $getres;

  public function checkuser($user, $pass, $conn,$rem)
  {
    $username = stripcslashes($user);
    $password = stripcslashes($pass);
    $username = mysqli_real_escape_string($conn, $user);
    $password = mysqli_real_escape_string($conn, $pass);

    $sql = "select *from users where users_email = '$username' and users_pwd = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
   

    if ($row) {

      $_SESSION['email'] = $row['users_email'];
      $_SESSION['pass'] = $row['users_pwd'];

      if (!empty($rem)) {
        setcookie('ur_email', $username, time() + (10 * 365 * 24 * 60 * 60));
        setcookie('ur_pass', $password, time() + (10 * 365 * 24 * 60 * 60));
      } else {
        if (isset($_COOKIE['ur_email'])) {
          setcookie('ur_email', '');
        }
        if (isset($_COOKIE['ur_pass'])) {
          setcookie('ur_pass', '');
        }
      }

      header("Location: blog-home.php");
    } else {
      $this->getres =  "<p class='message'> Login failed. Invalid username or password.</label>";
    }
  }

  public function getress()
  {
    return $this->getres;
  }
}
