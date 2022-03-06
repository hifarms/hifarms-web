<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign In</title>
</head>
<body>
    <!--Header starts here-->
  <header>
      <div class="header-container">
          <img src="img/logo.png" alt="logo" class="logo4x">
          <div class="services">
              <span>Home</span>
              <span>About</span>
              <span>Services</span>
              <span>Contact</span>
              <span>Blog</span>
          </div>
          <div class="buttons">
              <span class="register"><a href="signup.html">Sign up</a></span>
              <span class="login"><a href="signin.html">Login</a></span>
              <img src="img/get on google play.png" alt="play-store" class="play-store">
          </div>
          <div class="cart-whatsapp">
                <img src="img/Group 51.png" alt="cart" class="cart">
                 <img src="img/Group 47@2x.png" alt="call" class="call">
                 <span class="cart-counter">0</span>
          </div>
      </div>
  </header>
  <!--Header Ends-->


  <!--Registration form starts here-->
  <div class="container">
      <div class="sign-up-large">SIGN IN</div>
      <img src="img/Flower.svg" alt="flower" class="flower">
      <p>Don't have an account yet? <span><a href="index.html">Sign up</a></span> </p>
      <div class="form-container sign-in-container">
<<<<<<< HEAD:hifarms-web/public/signin.html
        <form class="sign-in">
            <span class="email-msg"></span>
            <input type="text" placeholder="Email">
            <span class="password-msg"></span>
            <input type="password" placeholder="Password">
=======

        {{-- <p class="text-success"> {{Session('success_message')}}</p>
        <p class="text-success"> {{Session('warning_message')}}</p> --}}

        <form class="sign-in" action="{{route('signin')}}" method="post">
            @csrf
            <input type="text" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
>>>>>>> dbdb48dca468256bde83d9c275ff6e639c605234:hifarms-web/resources/views/signin.blade.php
            <p class="forgot-password">Forgot Password?</p>

        </form>
        <img src="img/logo.png" alt="showcase-image">
      </div>
      <div class="google-fb-btn sign-in-google">
      <img src="img/google.jpg" alt="google" class="google-logo">
      <img src="img/facebook.png" alt="facebook" class="facebook-logo">
      <button>Submit</button>
    </div>
  </div>
  <!--Registration form end-->

  <!--Footer starts here-->
  <footer class="signup-footer">
     <div class="footer-container">
         <div class="footer-info">
             <img src="img/logo.png" alt="logo" width="75">
             <p>We are industry leading organic farm delivering the best products that boost your daily life energy and potential.</p>
              <div class="footer-social">
                  <a href="#"><img src="img/whatsapp-footer.svg" alt="whatsapp" width="20"></a>
                  <a href="#"><img src="img/ig.svg" alt="instagram" width="20"></a>
                  <a href="#"><img src="img/twitter-footer.png" alt="twitter" width="20"></a>
                  <a href="#"><img src="img/fb-footer.png" alt="facebook" width="20"></a>
              </div>
            </div>
         <div class="footer-links">
             <p>Links</p>
             <ul>
                 <li>Home</li>
                 <li>About</li>
                 <li>Services</li>
                 <li>Blog</li>
                 <li>Contact</li>
             </ul>
          </div>
          <div class="footer-address">
              <p class="address-head">Corporate Headquarters</p>
              <p class="address">Block 22, Mahe Gora Plaza, No. 2A Birnin Kebbi/Argungu Expressway, Birnin Kebbi, KebbI State.</p>
              <p>08034068234</p>
              <p>hifarmsltd@gmail.com</p>
          </div>
          <div class="footer-newsletter">
              <p class="newsletter-head">Newsletter</p>
              <p>Subscribe to our newsletter to receive weekly news, update, special offers, exclusive discounts</p>
                <div class="form-subscribe">
                  <input type="email" placeholder="Enter your email">
                  <button>Subscribe</button>
                </div>
                <img src="/img/get on google play.png" alt="" width="90">
          </div>
         </div>
  </footer>
  <!--Footer ends-->
<script src="/hifarms-web/public/js/main.js"></script>  
</body>
</html>