<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hifarms</title>
</head>
<body>
    <div>
        <h1>Reset Message</h1>
        <a href="{{url('reset-password?token='.$token)}}">click here to reset</a>
 
        <br>OR <p>copy and paste this in your browser https://www.hifarms.ng?reset-password={{$token}}</p>
    </div>
</body>
</html>