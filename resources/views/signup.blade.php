@extends('layout.app')

@section('content')
  <!--Registration form starts here-->
  <div class="container">
    <div class="sign-in-cont">
    <div class="sign-up-large">SIGN UP</div>
    </div>
      <img src="img/Flower.svg" alt="flower" class="flower">
      @if(Session('Success_message'))<p style="color: rgb(14, 185, 91);font-size:16px;">{{Session('Success_message')}} <a href="/dashboard" style="color: rgb(30, 30, 209)">click here</a></p>@endif
      <p>Already have an account? <span><a href="signin">Sign in</a></span> </p>
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
            <a href="{{ route('signin.google')}}"><img src="img/google.jpg" alt="google" class="google-logo"></a>
            <a href=" {{ route('signin.facebook')}}"><img src="img/facebook.png" alt="facebook" class="facebook-logo"></a>
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