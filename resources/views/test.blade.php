@extends('layout.app')

@section('title')
<title>Hifarms | Verify</title>
@endsection

@section('content')
 <div>
     {{$msg}}
 </div>
@endsection('content')

@section('js')
<script src="/hifarms-web/public/js/main.js"></script>
@endsection('js')  
</body>
</html>