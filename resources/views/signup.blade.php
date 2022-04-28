@extends('layout.app')

@section('content')
  <!--Registration form starts here-->
  <div class="container">
    <div class="sign-in-cont">
    <div class="sign-up-large">SIGN UP</div>
    </div>
      <img src="img/Flower.svg" alt="flower" class="flower">
      <p>Already have an account? <span><a href="signin.html">Sign in</a></span> </p>
      <div class="form-container">
        <form action="{{route('signup')}}" method="post">
          @csrf
          @error('username')
            <span class="username-msg">
              {{$message}}
            </span>
          @enderror
            <input type="text" placeholder="Username" name="username">
             @error('fullname')<span class="full-name-msg">{{$message}}</span>@enderror
            <input type="text" placeholder="Full name" name="fullname">
            @error('email')<span class="email-msg">{{$message}}</span>@enderror
            <input type="text" placeholder="Email" name="email">
            @error('password')<span class="password-msg">{{$message}}</span>@enderror
            <input type="password" placeholder="Password" name="password">
            <input type="password" placeholder="Confirm Password" name="password_confirmation">
            <div class="google-fb-btn">
           <img src="img/google.jpg" alt="google" class="google-logo">
           <img src="img/facebook.png" alt="facebook" class="facebook-logo">
           <button>Submit</button>
    </div>
        </form>
        <img src="img/logo.png" alt="showcase-image" class="signup-img">
      </div>
  </div>
  <!--Registration form end-->

@endsection('content')

@section('js')
<script src="/hifarms-web/public/js/main.js"></script>
@endsection('js')  
</body>
</html>