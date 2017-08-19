<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Battlemage Training</title>

    <link href="https://fonts.googleapis.com/css?family=Bangers|Patua+One" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        html, body {
            background-color: #000;
            color: #212226;
            font-family: 'Patua One', cursive;

            font-weight: 400;
            height: 100vh;
            margin: 0;
            font-size: 26px;
        }

        .content {
            text-align: center;
            position: relative;
            z-index: 2;
            background: #fff;
            min-height: 100vh;
            max-width: 800px;
            margin: 0 auto;
            -webkit-box-shadow: 0 0 60px rgba(0, 0, 0, .2);
            -moz-box-shadow: 0 0 60px rgba(0, 0, 0, .2);
            box-shadow: 0 0 60px rgba(0, 0, 0, .2);
        }

        .title {
            background: url('/img/splash.png') center;
            -webkit-background-size: cover;
            background-size: cover;
            padding-bottom: 49%;
            margin: 0;
        }

        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0;
        }

        .title2 {
            font-size: 110px;
            font-family: 'Bangers', cursive;
            letter-spacing: 0.15rem;
            text-transform: capitalize;
            color: #ffe146;
            -webkit-text-stroke: 1px #222;
            text-shadow: 2px 2px 0 #222,
            -1px -1px 0 #222,
            1px -1px 0 #222,
            -1px 1px 0 #222,
            1px 1px 0 #222;
            margin: 0 0 30px;
            font-weight: normal;
            line-height: 0.85;
            font-variant: small-caps;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        h2, h3, h4 {
            font-family: 'Bangers', cursive;
            font-weight: 400;
            letter-spacing: 0.1rem;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .background {
            background: url('/img/splash.png') center;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            position: fixed;
            z-index: 0;
            -webkit-background-size: cover;
            background-size: cover;
            -webkit-filter: blur(20px);
            -moz-filter: blur(20px);
            -o-filter: blur(20px);
            -ms-filter: blur(20px);
            filter: blur(20px);
            opacity: 0.85;
        }

    </style>
</head>
<body>

<div class="background">

</div>

<div>
    <div class="content">
        <h1 class="title">
            <span class="sr-only">
                Battlemage Training
            </span>
        </h1>

        <p>A game for the HTC Vive and Oculus</p>

        <h2>Coming soon to Steam <i class="fa fa-steam" aria-hidden="true"></i></h2>
    </div>
</div>
</body>
</html>
