@extends('layout.app')

@section('content')
  <!--Registration form starts here-->
  <div class="container">
      <div class="sign-in-cont">
         <div class="sign-up-large">SIGN IN</div>
      </div>
      <img src="img/Flower.svg" alt="flower" class="flower">
      <p>Don't have an account yet? <span><a href="index.html">Sign up</a></span> </p>
      {{Session('warning_message')}}
      <div class="form-container sign-in-container">
        <form class="sign-in" action="{{route('signin')}}" method="post">
            @csrf
            <span class="span-login" style="padding-bottom: 15px"></span>
            <input type="text" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">

            <p class="forgot-password">Forgot Password?</p>
            <div class="google-fb-btn sign-in-google">
             <img src="img/google.jpg" alt="google" class="google-logo">
             <img src="img/facebook.png" alt="facebook" class="facebook-logo">
             <button>Submit</button>
             </div>
        </form>
        <img src="img/logo.png" alt="showcase-image" class="sign-in-image">
      </div>
  </div>
  <!--Registration form end-->

@endsection('content')
@section('js')
<script src="/js/main.js"></script>  
@endsection('js')
</body>
</html>