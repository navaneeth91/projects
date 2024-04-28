<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>RESTAURENT</title>
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img id="LOGO" src="images/LOGO.jpg">
            <ul>
                <li><a href="order.html">ORDER NOW </a></li>
                <li><a>login</a></li>
                <li><a>CHECKOUT</a></li>
                <li><a href="help.html">HELP </a></li>
                <div class="background"></div>
            </ul>
        </div>
        <div class="container" id="signup" style="display:none;">
            <h1 class="form-title">Register</h1>
            <form method="post" action="register.php">
              <div class="input-group">
                 <i class="fas fa-user"></i>
                 <input type="text" name="fName" id="fName" placeholder="First Name" required>
                 <label for="fname">First Name</label>
              </div>
              <div class="input-group">
                  <i class="fas fa-user"></i>
                  <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                  <label for="lName">Last Name</label>
              </div>
              <div class="input-group">
                  <i class="fas fa-envelope"></i>
                  <input type="email" name="email" id="email" placeholder="Email" required>
                  <label for="email">Email</label>
              </div>
              <div class="input-group">
                  <i class="fas fa-lock"></i>
                  <input type="password" name="password" id="password" placeholder="Password" required>
                  <label for="password">Password</label>
              </div>
             <input type="submit" class="btn" value="Sign Up" name="signUp">
            </form>
            <p class="or">
              ----------or--------
            </p>
            <div class="icons">
              <i class="fab fa-google"></i>
              <i class="fab fa-facebook"></i>
            </div>
            <div class="links">
              <p>Already Have Account ?</p>
              <button id="signInButton">Sign In</button>
            </div>
          </div>
      
          <div class="container" id="signIn">
              <h1 class="form-title">Sign In</h1>
              <form method="post" action="register.php">
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
                <p class="recover">
                  <a href="#">Recover Password</a>
                </p>
               <input type="submit" class="btn" value="Sign In" name="signIn">
              </form>
              <p class="or">
                ----------or--------
              </p>
              <div class="icons">
                <i class="fab fa-google"></i>
                <i class="fab fa-facebook"></i>
              </div>
              <div class="links">
                <p>Don't have account yet?</p>
                <button id="signUpButton">Sign Up</button>
              </div>
            </div>
            <script src="login.js"></script>
    
       <div class="footer">
        <h3>  made with  &hearts; by nava</h3>
        <h5> contact me  through</h5>
        <a  href="https://www.instagram.com/error_404"><img  id="insta"  src="images/instalogo.jpg" alt=""></a>
        <a  href="mailto:navaneethsiliveri7288@gmail.com"><img  id="insta"  src="images/mail.png " alt=""></a>
        <a  href="https://www.instagram.com/_error_404"><img id="insta"  src="images/github.jpg" alt=""></a>
    </div>   
         
    </div>
</body>
</html> 