<?php
//This script will handle login
session_start();

// check if the user is already logged in
if (isset($_SESSION['username'])) {
  header("location: sdashboard.php");
  exit;
}
require_once "connection.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
    $err = "Please enter username + password";
  } else {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
  }


  if (empty($err)) {
    $sql = "SELECT id, username, password FROM registered_students WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;


    // Try to execute this statement
    if (mysqli_stmt_execute($stmt)) {
      mysqli_stmt_store_result($stmt);
      if (mysqli_stmt_num_rows($stmt) == 1) {
        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
        if (mysqli_stmt_fetch($stmt)) {
          if (password_verify($password, $hashed_password)) {
            // this means the password is corrct. Allow user to login
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["id"] = $id;
            $_SESSION["loggedin"] = true;

            //Redirect user to welcome page
            header("location: sdashboard.php");

          }
        }

      }

    }
  }


}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OUPC-Student login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link rel="stylesheet" href="../css/signin.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form method="post" action="">
            <img class="mb-4" src="../images/oulogo.png" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Student Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="username" placeholder="name@example.com">
                <label for="floatingInput" >Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword"  >Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            

            <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">Login</button>
            <div class="checkbox m-3">
                <label>
                    Don't have an Account.? <a href="register.php">Register here</a>
                </label>
            </div>
            <p class="mt-5 mb-3 text-muted">&copy; 2022 OU Placement Cell</p>
        </form>
    </main>


</body>

</html>