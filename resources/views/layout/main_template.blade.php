<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laracrud</title>

</head>
<body style="background-color: rgb(74, 98, 148)">
    
    @include('fragments/navbar')

    @if (session('status'))
        {{session('status')}}        
    @endif

    @yield('content')
</body>
</html>