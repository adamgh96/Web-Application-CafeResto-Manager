<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Sign Up</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/FormulaireEmployee.css">
 
</head>
<body>
    <div class="background">
       <!-- <div class="shape"></div>
        <div class="shape"></div>-->
    </div>
    <form action="AjoutEmployee.php" method="POST">
        
        <h3>Create Account</h3>
        <div class="content">
          <div >
            <label for="nom">First Name</label>
            <input type="text" placeholder="First Name" id="nom" name="nom">

            <label for="prenom">Last Name</label>
            <input type="text" placeholder="Last Name" id="prenom" name="prenom">

            <label for="Login">Login</label>
            <input type="text" placeholder="Login" id="Login" name="login">
          </div>

          <div class="contetn2">
            <label for="password">Password</label>
            <input type="password" placeholder="Password" id="password" name="password">

            <label for="TEL">TEL</label>
            <input type="text" placeholder="TEL" id="TEL" name="tel">

            <label for="Adresse">Adresse</label>
            <input type="text" placeholder="Adresse" id="Adresse" name="adresse">
          </div>
          
        </div>
        
        <div class="FonctionEmployee">
          <label for="fonction">Fonction: </label>
          <input list="browser" name="fonction">
          <datalist id="browser">
            <option value="caisier"></option>
            <option value="serveur"></option>
            <option value="cuisinier"></option>
          </datalist>
        </div>

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
