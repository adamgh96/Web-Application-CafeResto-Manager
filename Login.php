<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Login.css">
 
</head>
<body>
    <div class="background">
       <!-- <div class="shape"></div>
        <div class="shape"></div>-->
    </div>
    <form action="auth1.php" method="POST">
        <a href="LoginEmployee.php">Login Employee</a>
        <h3>Login Here</h3>

        <label for="email">Email</label>
        <input type="text" placeholder="Email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button type="submit">Log In</button>
        <div class="social">
          <!--<div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>-->
          <p>You Dont't have account? </p>
          <a href="Formulaire.php"> Create Now</a>
        </div>
    </form>
</body>
</html>
