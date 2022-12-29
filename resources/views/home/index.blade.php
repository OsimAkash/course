<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is home page</title>
</head>
<body>


    <h1>Welcome to about page</h1>


   Name: {{ $name }}
</br>
   Roll: {{ $roll }}
</br>
<h2>Subject</h2>
{{ $subject ['0'] }} <br>
{{ $subject ['1'] }} <br>
{{ $subject ['2'] }}


</body>
</html>