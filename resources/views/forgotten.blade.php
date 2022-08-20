@extends('layout.app')

@section('content')
  <!--Registration form starts here-->
  <div class="container">
      <div class="sign-in-cont">
         <div class="sign-up-large forgot-password-showcase">Forgot Password</div>
      </div>
      <img src="img/Flower.svg" alt="flower" class="flower">
      <p>Don't have an account yet? <span><a href="/signup">Sign up</a></span> </p>
     
      <div class="form-container sign-in-container">
        <form class="sign-in" action="{{route('forget')}}" method="post">
          @csrf
          <span class="span-login" style="padding-bottom: 20px">{{Session('warning_message')}}
          </span>

          <span class="span-login" style="padding-bottom: 20px;color:rgb(111, 233, 74)">{{Session('success_message')}}
          </span>
          @error('email')<span class="full-name-msg">{{$message}}</span>@enderror
          <input type="text" placeholder="Please Insert Your Email" name="email">
         
          <div class="google-fb-btn sign-in-google forgot-password-showcase">
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