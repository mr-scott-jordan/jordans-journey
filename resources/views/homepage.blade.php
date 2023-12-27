<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Now using Blade for the homepage</h3>
    <p>You're visiting on {{ date('l jS \of F Y h:i:s A') }}</p>
    <h5>Developer Info</h5>
    @foreach ($userInfo as $label => $data) 
    <p>{{ $label }} : {{ $data }}</p>
    @endforeach
    <a href="/about">Go to the About page</a>
</body>
</html>