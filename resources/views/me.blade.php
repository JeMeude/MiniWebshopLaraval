<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Me</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            @if($age >= 18)
             background: green;
            @else
            background: hotpink;
            @endif
            color: black;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0 auto;
            width: 50%;
            align-items: center;

        }

        h1{
            border-bottom: 2px solid;
            text-align: center;
        }

        .full-height {
            height: 100vh;
        }


    </style>
    </head>

<body>
<div class="header">
    <h1>{{ $name }}</h1>

    @if($age >= 18)
        <span>Je bent volwassen</span>
    @else
        <span>Je bent niet volwassen</span>
    @endif

</div>

<div class="bio">
    <h2>Bio</h2>
    <p>{{ $description }}</p>
</div>

<ul class="interests">
    @foreach($interests as $interests)
        <li>{{ $interests }}</li>
    @endforeach
</ul>


<div class="contact">
    <h2>Email</h2>
    <p>{{ $email }}</p>
</div>


</body>
</html>
