<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista de la base de datos</title>
</head>
<body>
    <h3>Información desde la base de datos</h3>
    <p>{{$client->client_name}} {{$client->last_newAA   |1  <Q></Q>ame}} {{$client->second_last_name}}</p>    
    <p>{{$client->last_name}}</p>
    <p>{{$client->second_last_name}}</p>
</body>
</html>