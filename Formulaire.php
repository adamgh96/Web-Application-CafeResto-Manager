<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Sign Up</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/Formulaire.css">
 
</head>
<body>
    <div class="background">
       
    </div>
    <form action="Ajout.php" method="POST">
        
        <h3>Create Account</h3>

        <label for="username">First Name</label>
        <input type="text" placeholder="First Name" id="username" name="username">
        <label for="lastname">Last Name</label>
        <input type="text" placeholder="Last Name" id="lastname" name="lastname">
        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <input type="submit" value="Sign Up">
        <!--<div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
          <p>You Dont't have account? </p>
          <a href=""> Create Now</a>
        </div>-->
    </form>
</body>
</html>
