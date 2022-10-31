<?php
require_once "connection.php";

$fullname=$username = $password = $confirm_password = "";
$fullname_err=$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  // Check if username is empty
  if (empty(trim($_POST["username"]))) {
    $username_err = "Username cannot be blank";
  } else {
    $sql = "SELECT id FROM registered_students WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set the value of param username
      $param_username = trim($_POST['username']);

      // Try to execute this statement
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken";
        } else {
          $username = trim($_POST['username']);
        }
      } else {
        echo "Something went wrong";
      }
    }
  }

  mysqli_stmt_close($stmt);


  // Check for password
  if (empty(trim($_POST['password']))) {
    $password_err = "Password cannot be blank";
  } elseif (strlen(trim($_POST['password'])) < 5) {
    $password_err = "Password cannot be less than 5 characters";
  } else {
    $password = trim($_POST['password']);
  }

  // Check for confirm password field
  if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
    $password_err = "Passwords should match";
  }


  // If there were no errors, go ahead and insert into the database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) 
  {
    $sql = "INSERT INTO registered_students (fullname,username, password) VALUES (?, ?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "sss",$param_fullname, $param_username, $param_password);

      // Set these parameters
      $param_fullname = $fullname;
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

      // Try to execute the query
      if (mysqli_stmt_execute($stmt)) {
        header("location: studentlogin.php");
      } else {
        echo "Something went wrong... cannot redirect!";
      }
    }
    mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);
}

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>OUPC | Registration</title>
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Font-->
  <link rel="stylesheet" type="text/css" href="../css/roboto-font.css">
  <link rel="stylesheet" type="text/css" href="../fonts/font-awesome-5/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <!-- Main Style Css -->
  <link rel="stylesheet" href="../css/register.css" />
</head>

<body class="form-v5">
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary" aria-label="Tenth navbar example">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08"
        aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="#">
        <img src="../images/oulogo1.png" alt="oulogo" width="30" height="24">
        <h6>Osmania University Placement
          Cell</h6>
      </a>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
          <li class="nav-item"><a href="#" class="nav-link" aria-current="page">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li>
          <li class="nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
        </ul>
      </div>
    </div>
  </nav> -->
  <div class="page-content">
    <div class="form-v5-content">
      <form class="form-detail" action="#" method="post">
        
        <h2>Student Registration Form</h2>
        <div class="form-row">
          <label for="full-name">Full Name</label>
          <input type="text" name="fullname" id="full-name" class="input-text" placeholder="Your Name" required>
          <i class="fas fa-user"></i>
        </div>
        <div class="form-row">
          <label for="your-email">Email</label>
          <input type="text" name="username" id="your-email" class="input-text" placeholder="Your Email" required
            pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="form-row">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
          <i class="fas fa-lock"></i>
        </div>
        <div class="form-row">
          <label for="password">Confirm Password</label>
          <input type="password" name="confirm_password" id="password" class="input-text" placeholder="Confirm Password"
            required>
          <i class="fas fa-lock"></i>
        </div>
        <div class="form-row-last">
          <input type="submit" name="register" class="register" value="Register">
          <label>Already Registered.? <a href="studentlogin.php">Login here</a></label>
        </div>
        <div class="form-row">
          
      </div>
      </form>
      
    </div>
  </div>
</body>

</html>