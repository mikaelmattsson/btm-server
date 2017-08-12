<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <h1 class="title">
            High Score
        </h1>

        <table class="table">
            <thead>
            <tr>
                <th>Score</th>
                <th>User name</th>
                <th>Steam ID</th>
                <th>Date</th>
            </tr>
            </thead>
            <tbody>
            @foreach($highScores as $highScore)
                <tr>
                    <td>{{$highScore->getScore()}}</td>
                    <td>{{$highScore->getUserName()}}</td>
                    <td>{{$highScore->getSteamId()}}</td>
                    <td>{{$highScore->getCreatedAt()->format('Y-m-d H:i')}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
