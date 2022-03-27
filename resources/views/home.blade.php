<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    @if(Session::has('LOGIN_SESSION'))
    <p>Halo <b>{{ (Session::get('LOGIN_SESSION')['username']) }}</b></p>
    @endif
    <br>
    <br>
    <a href="logout">logout disini</a>
</body>

</html>