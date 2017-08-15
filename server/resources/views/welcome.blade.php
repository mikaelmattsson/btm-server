<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Bangers|Patua+One" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <style>
            html, body {
                background-color: #fff;
                color: #212226;
                font-family: 'Patua One', cursive;

                font-weight: 400;
                height: 100vh;
                margin: 0;
                font-size: 26px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
                position: relative;
                z-index: 2;
            }

            .title {
                font-size: 110px;
                font-family: 'Bangers', cursive;
                letter-spacing: 0.15rem;
                text-transform: capitalize;
                color: #ffe146;
                -webkit-text-stroke: 1px #222;
                text-shadow:
                        2px 2px 0 #222,
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
                width: 100%;
                height: 100%;
                position: fixed;
                z-index: 0;
                background: -webkit-linear-gradient(top, rgb(161, 219, 255) 0%, rgb(203, 235, 255) 53%, rgb(240, 249, 255) 100%);
                background-size: 100% 100%;
            }

            .clouds {
                height: 300px;
                width: 200px;
                position: absolute;
            }

            .cloud1 {
                top: 80px;
                z-index: 100;
                fill: #eee;
                -webkit-animation: move 20s linear infinite;
                -moz-animation: move 20s linear infinite;
                -o-animation: move 20s linear infinite;
                animation: move 20s linear infinite;
            }

            .cloud2 {
                top: 240px;
                z-index: 200;
                fill: #eee;
                -webkit-animation: move 35s linear 10s infinite backwards;
                -moz-animation: move 35s linear 10s infinite backwards;
                -o-animation: move 35s linear 10s infinite backwards;
                animation: move 35s linear 10s infinite backwards;
            }

            @-webkit-keyframes move {
                from {-webkit-transform: translateX(-400px);}
                to {-webkit-transform: translateX(1350px);}
            }


        </style>
    </head>
    <body>

    <div class="background">
        <svg class="clouds cloud1" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="512" height="512"
             viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
        <path id="cloud-icon"
              d="M406.1 227.63c-8.23-103.65-144.71-137.8-200.49-49.05 -36.18-20.46-82.33 3.61-85.22 45.9C80.73 229.34 50 263.12 50 304.1c0 44.32 35.93 80.25 80.25 80.25h251.51c44.32 0 80.25-35.93 80.25-80.25C462 268.28 438.52 237.94 406.1 227.63z"></path>
        </svg>
        <svg class="clouds cloud2" xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="512" height="512"
           viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
            <path id="cloud-icon"
                  d="M406.1 227.63c-8.23-103.65-144.71-137.8-200.49-49.05 -36.18-20.46-82.33 3.61-85.22 45.9C80.73 229.34 50 263.12 50 304.1c0 44.32 35.93 80.25 80.25 80.25h251.51c44.32 0 80.25-35.93 80.25-80.25C462 268.28 438.52 237.94 406.1 227.63z"></path>
        </svg>
    </div>

        <div class="flex-center position-ref full-height">
            <div class="content">
                <h1 class="title">
                    Battlemage <br> Training
                </h1>

                <p>A game for the HTC Vive and Oculus</p>

                <h2>Coming soon to Steam <i class="fa fa-steam" aria-hidden="true"></i></h2>
            </div>
        </div>
    </body>
</html>
