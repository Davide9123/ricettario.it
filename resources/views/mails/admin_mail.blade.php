<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Buongiorno Admin</h1>
    <p>Sei stato contattato da: {{$adminContact['name']}}/{{$adminContact['email']}}</p>
    <p>Il suo messaggio è: {{$adminContact['message']}}</p>
</body>
</html>