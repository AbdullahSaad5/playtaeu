<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Playtaeu Support</title>
</head>

<body>
    <h1>Password Reset</h1>
    <h3>
        Hello <strong> {{ $details->username }} </strong><br />
        Forgot Your Password? We received a request for the
        forgotten password. Below is your password.
    </h3>
    <h2 class="password">{{ $details->password }}</h2>
    <h3>
        This is a auto-generated mail. Thanks for using Playtaeu.
    </h3>

</body>

</html>
