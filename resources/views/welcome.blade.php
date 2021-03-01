<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        html {
            font-size: 10px;
        }

        body {
            height: 100vh;
            display: flex;
            margin: 0;
            padding: 0;
            align-items: center;
            justify-content: center;
        }

        h1 {
            font-size: 5rem;
        }
    </style>
</head>

<body class="antialiased">
    <a href="/todos">
        <h1>Todos</h1>
    </a>
</body>

</html>