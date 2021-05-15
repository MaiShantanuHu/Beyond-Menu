<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
      .image {
        background-image: url(images/food21.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        height: 91vh;
        padding: 1rem;
        /*border: 5px solid red;*/
      }
      .title {
        box-sizing: border-box;
        /*border: 5px solid red;*/
        text-align: center;
        width: 90%;
        margin: auto;
        font-size: 6rem;
      }
      .form{
        width: 50%;
        height: 80%;
        margin-top: 2.3rem;
        padding: 0px;
        margin: auto;
      }
      .form-text {
        height: 8rem;
        width: 100%;
        opacity: 0.6;
        /*margin: 20px;*/
        border: 1px solid black;
        background-color: #ffffff;
        filter: alpha(opacity=60);
      }
      .form-control {
        opacity: 0.6;
        /*margin: 20px;*/
        border: 1px solid black;
        background-color: #ffffff;
        filter: alpha(opacity=60);
      }
      .btn btn-primary {
        margin: 20px;
      }

    /Footer/
      @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);

      * {
        font-family: Open Sans;
      }



      .footer-distributed{
        background: #202428;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;
        padding: 55px 50px;
      }

      .footer-distributed .footer-left,
      .footer-distributed .footer-center,
      .footer-distributed .footer-right{
        display: inline-block;
        vertical-align: top;
      }

      /* Footer left */

      .footer-distributed .footer-left{
        width: 40%;
      }

      /* The company logo */

      .footer-distributed h3{
        color:  #ffffff;
        font: normal 36px 'Open Sans', cursive;
        margin: 0;
      }

      .footer-distributed h3 span{
        color:  lightseagreen;
      }

      /* Footer links */

      .footer-distributed .footer-links{
        color:  #ffffff;
        margin: 20px 0 12px;
        padding: 0;
      }

      .footer-distributed .footer-links a{
        display:inline-block;
        line-height: 1.8;
        font-weight:400;
        text-decoration: none;
        color:  inherit;
      }

      .footer-distributed .footer-company-name{
        color:  #222;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
      }

      /* Footer Center */

      .footer-distributed .footer-center{
        width: 35%;
      }

      .footer-distributed .footer-center i{
        background-color:  #33383b;
        color: #ffffff;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
      }

      .footer-distributed .footer-center i.fa-envelope{
        font-size: 17px;
        line-height: 38px;
      }

      .footer-distributed .footer-center p{
        display: inline-block;
        color: #ffffff;
        font-weight:400;
        vertical-align: middle;
        margin:0;
      }

      .footer-distributed .footer-center p span{
        display:block;
        font-weight: normal;
        font-size:14px;
        line-height:2;
      }

      .footer-distributed .footer-center p a{
        color:  lightseagreen;
        text-decoration: none;;
      }

      .footer-distributed .footer-links a:before {
        content: "|";
        font-weight:300;
        font-size: 20px;
        left: 0;
        color: #fff;
        display: inline-block;
        padding-right: 5px;
      }

      .footer-distributed .footer-links .link-1:before {
        content: none;
      }

      /* Footer Right */

      .footer-distributed .footer-right{
        width: 20%;
      }

      .footer-distributed .footer-company-about{
        line-height: 20px;
        color:  #92999f;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
      }

      .footer-distributed .footer-company-about span{
        display: block;
        color:  #ffffff;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
      }

      .footer-distributed .footer-icons{
        margin-top: 25px;
      }

      .footer-distributed .footer-icons a{
        display: inline-block;
        width: 35px;
        height: 35px;
        cursor: pointer;
        background-color:  #33383b;
        border-radius: 2px;

        font-size: 20px;
        color: #ffffff;
        text-align: center;
        line-height: 35px;

        margin-right: 3px;
        margin-bottom: 5px;
      }

      /* If you don't want the footer to be responsive, remove these media queries */

      @media (max-width: 880px) {

        .footer-distributed{
          font: bold 14px sans-serif;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right{
          display: block;
          width: 100%;
          margin-bottom: 40px;
          text-align: center;
        }

        .footer-distributed .footer-center i{
          margin-left: 0;
        }

      }  
    </style>

    <title>Beyond Menu</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Beyond Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about-us.php">About Us</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="contact-us.php">Contact<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sign-in.php">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- navbar -->

    <!-- Hero section -->
    <div class="image">
      <div class="title">
        <h1 style="font-size: 4rem; font-family: UberMoveText Regular, sans serif; color: #3E231E">Contact Us</h1>
      </div>
      <hr>
      <br>
      <br>

      <!-- Input -->
      <div class="form">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="How can we help you?">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
          </div>
          <div class="form-group">
            <input type="text" class="form-text" id="exampleInputPassword1" placeholder="Type text">
          </div>
          <button type="submit" class="btn btn-primary">Submit Feedback</button>
        </form>
      </div>
      <!-- Input -->

    </div>
    <!-- Hero section -->

    <!-- Footer -->
    <footer class="footer-distributed">

      <div class="footer-left">

        <h3>Beyond<span>Menu</span></h3>

        <p class="footer-links">
          <a href="home.php" class="link-1">Home</a>

          <a href="#">Blog</a>

          <a href="#">Pricing</a>

          <a href="about-us.php">About</a>

          <a href="#">Faq</a>

          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Beyond Menu © 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>525, Mumbai</span>Maharashtra, India</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+91-005626819720</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@beyondmenu.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>Site created by</span>
          Shantanu Chhailkar, Praveen Choudhary, Abhishek Vishwakarma, Vishal Desai
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>
    <!-- Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>