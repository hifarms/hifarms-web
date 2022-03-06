<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
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
      <div class="sign-up-large">SIGN UP</div>
      <img src="img/Flower.svg" alt="flower" class="flower">
      <p>Already have an account? <span><a href="signin.html">Sign in</a></span> </p>
      <div class="form-container">
<<<<<<< HEAD:hifarms-web/public/signup.html
        <form>
            <span class="username-msg"></span>
            <input type="text" placeholder="Username">
             <span class="full-name-msg"></span>
            <input type="text" placeholder="Full name">
            <span class="email-msg"></span>
            <input type="text" placeholder="Email">
            <span class="password-msg"></span>
            <input type="password" placeholder="Password">
            <input type="password" placeholder="Confirm Password">
=======
        {{-- <p class="text-success"> {{Session('success_message')}}</p> --}}
        <form action="{{route('signup')}}" method="post">
          @csrf
            <input
            type="text" 
            placeholder="Username" 
            name="username"
            value=""

            >
            <input 
            type="text" 
            placeholder="Full name"
            name="fullname"
            value=""
            >
            <input type="text" placeholder="Email" name='email'>
            <input type="password" placeholder="Password" name='password'>
            <input type="password" placeholder="Confirm Password" name='confirm_password'>
           
>>>>>>> dbdb48dca468256bde83d9c275ff6e639c605234:hifarms-web/resources/views/signup.blade.php
        </form>
        <img src="img/logo.png" alt="showcase-image">
      </div>
      <div class="google-fb-btn">
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