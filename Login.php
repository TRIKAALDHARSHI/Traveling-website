<?php
   require 'dbconfig\config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="letsgo.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="Hotel.css">
  <link rel="stylesheet" href="login.css">
  <title>DesiTraveller.com/Login/</title>
</head>

<body>
  <div class="header-login">
    <div class="navbar" id="nav">
      <div class="logo" id="lg">
        <h3>DesiTraveller</h3>
      </div>
      <ul>
        <li><a href="home.html">Home</a></li>
        <li><a href="letsgo.html">Travel</a></li>
        <li><a href="ticket.html">Tickets</a></li>
        <li><a href="Hotels.html">Hotel</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="Login.html">Contact</a></li>
      </ul>

      <div class="dropdown-menu">
        <div class="nav">
          <img src="icons\menuicon.png" alt="" onclick="navdrop()">
        </div>
        <ol id="nav-ol">
          <li><a href="home.html">Home</a></li>
          <li><a href="letsgo.html">Travel</a></li>
          <li><a href="ticket.html">Tickets</a></li>
          <li><a href="Hotels.html">Hotel</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="Login.html">Contact</a></li>
        </ol>
      </div>

    </div>
    <div class="header-content-about">
      <div class="header1">
        <h1>Subscribe</h1>
        <h3>To get inspiration for your next trip</h3>
      </div>
    </div>
  </div>

  <div class="con-container">
    <div class="con-con1" id="login">
      <form action="">
        <div class="con-head">DesiTraveller</div>
        <div class="inter-con">
          <h2>Log in or create an account</h2>
          <div class="int-con">
            <p>Username</p>
            <input type="text" placeholder="Enter username">
            <p>Password</p>
            <input type="password" placeholder="Enter password">
          </div>
          <button id="con-btn">Login</button>
          <p class="center">If you don't have an account <a onclick="Register()"><u>Register here</u></a></p>
        </div>
      </form>
    </div>

    <div class="con-con2" id="register">
      <form action="login.php" method="post">
        <div class="con-head">DesiTraveller</div>
        <div class="inter-con">
          <h2>Sign up to create an account</h2>
          <div class="int-con">
            <p>Username</p>
            <input type="email" placeholder="Enter email or username">
            <p>Password</p>
            <input type="password" placeholder="Enter password">
            <p>Confirm Password</p>
            <input type="password" placeholder="Confirm password">
          </div>
          <button type="button" id="con-btn">SignUp</button>
        </div>
      </form>
    </div>


  </div>



  <footer>
    <div class="foot1">
      <p>Want to receive exclusive hotel offers? Subscribe to our newsletter!</p>
      <div class="news-email">
        <input type="email" placeholder="Email address">
        <button id="foot-btn">Subscribe</button>
      </div>
    </div>
    <div class="foot2">
      <div class="foot2-1">
        <p><b>DesiTraveller - </b>Farid Nagar, Bhandup west, Mumbai-400078</p>
        <div class="social">
          <a href="https://www.instagram.com/chicksforclimate/"><i class="fa-brands fa-square-instagram"></i></a>
          <a href="https://www.instagram.com/chicksforclimate/"><i class="fa-brands fa-square-facebook"></i></a>
          <a href="https://www.instagram.com/chicksforclimate/"><i class="fa-brands fa-square-twitter"></i></a>
          <a href="https://www.instagram.com/chicksforclimate/"><i class="fa-brands fa-linkedin"></i></a>
          <a href="https://www.instagram.com/chicksforclimate/"><i class="fa-brands fa-square-youtube"></i></a>
        </div>
      </div>
      <div class="dropdown">
        <select name="cars" id="cars">
          <option value="India">India</option>
          <option value="USA">USA</option>
          <option value="Oman">Oman</option>
          <option value="Nepal">Nepal</option>
          <option value="Pakistan">Pakistan</option>
          <option value="Norway">Norway</option>
          <option value="Germany">Germany</option>
        </select>
      </div>
    </div>
    <div class="foot3">
      <div class="grid">
        <div class="grid-link">
          <a href="">Company</a>
          <a href="">Jobs</a>
          <a href="">Press</a>
          <a href="">Investor relations</a>
        </div>
      </div>
      <div class="grid">
        <div class="grid-link">
          <a href="">Mobile apps - searching on the go</a>
          <a href="">DesiTraveller Business Studio</a>
        </div>
      </div>
      <div class="grid">
        <div class="grid-link">
          <a href="">Learn how DesiTraveller works</a>
          <a href="">Terms and condition</a>
          <a href="">Legal information</a>
          <a href="">Privacy notice</a>
          <a href="">Cyber Security</a>
          <a href="">Coronavirus (COVID-19) travel advice</a>
        </div>
      </div>
    </div>
    <div class="foot4">
      <h2>DesiTraveller</h2>
      <p>Copyright 2022 DesiTraveller | All rights reserved</p>
      <p>Website designed and Made by - <b>Rajkamal Yadav</b></p>
    </div>
  </footer>
  <script src="login.js"></script>
  <script src="style.js"></script>
  <script src="Hotels.js"></script>
  <script src="https://kit.fontawesome.com/13dda6b84a.js" crossorigin="anonymous"></script>
</body>

</html>