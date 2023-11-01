<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.testing.head')
    <title>Home</title>
</head>
<body>
    <h1>This is my first try</h1>
    @for ($i=0;$i<10;$i++)

        <h2>This is line no: {{ $i+1 }}</h2> <br>


    @endfor
</body>
</html>