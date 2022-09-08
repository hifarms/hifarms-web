<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hifarms</title>    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">


</head>
<body>
    <div>
        <h1>Contact Message</h1>
        <p>Name : {{$contact['fullname']}}</p>
        <p>Email : {{$contact['email']}}</p>
        <p>Message : {{$contact['message']}}</p>
    </div>
</body>
</html>