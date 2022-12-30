<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create an user</title>
</head>
<body>
    <form action="/test-any" method="post">
        @csrf
        @method('DELETE')
        <input type="text" name="name"> <br> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>