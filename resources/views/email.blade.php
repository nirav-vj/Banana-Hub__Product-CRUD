<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @php
        $randomNumber = rand(0, 1000000);
    @endphp
    <h4>Welcome To Byond-Snack App</h4>
    <h4>This is Your OTP: {{ $randomNumber }}</h4>

</body>

</html>
