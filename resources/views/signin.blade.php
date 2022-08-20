@extends('layout.app')

@section('content')
  <!--Registration form starts here-->
  <div class="container">
      <div class="sign-in-cont">
         <div class="sign-up-large">SIGN IN</div>
      </div>
      <img src="img/Flower.svg" alt="flower" class="flower">
      <p>Don't have an account yet? <span><a href="/signup">Sign up</a></span> </p>
      {{Session('warning_message')}}
      <div class="form-container sign-in-container">
        <form class="sign-in" action="{{route('signin')}}" method="post">
            @csrf
            <span class="span-login" style="padding-bottom: 20px">{{Session('warning_message')}}
            </span>

            <span class="span-login" style="padding-bottom: 20px;color:rgb(54, 231, 63)">{{Session('success_message')}}
            </span>

            @error('email')<span class="full-name-msg">{{$message}}</span>@enderror
            <input type="text" placeholder="Email" name="email">
            @error('password')<span class="full-name-msg">{{$message}}</span>@enderror
            <input type="password" placeholder="Password" name="password">

            <a href="/forgetten-password"><p class="forgot-password">Forgot Password?</p></a> 
            <div class="google-fb-btn sign-in-google">
            <a href="{{ route('signin.google')}}"><img src="img/google.jpg" alt="google" class="google-logo"></a>
             <a href=" {{ route('signin.facebook')}}"><img src="img/facebook.png" alt="facebook" class="facebook-logo"></a>
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