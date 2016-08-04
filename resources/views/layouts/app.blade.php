<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato';
            background-color: #005495;
        }

        .navbar.navbar-default {
            background-color: #0d0d0d;
            border: none;
        }

        .navbar-header {
            background-color: #171F26;
        }

        .fa-btn {
            margin-right: 6px;
        }

        .task-header {
            color: #D0D0D0;
        }

        #logo svg {
            width: 70px;
            bottom: 10px;
            position: relative;
        }
        .calm-background {
            background: rgba(0,84,149,1);
            background: -moz-linear-gradient(top, rgba(0,84,149,1) 0%, rgba(0,36,85,1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(0,84,149,1)), color-stop(100%, rgba(0,36,85,1)));
            background: -webkit-linear-gradient(top, rgba(0,84,149,1) 0%, rgba(0,36,85,1) 100%);
            background: -o-linear-gradient(top, rgba(0,84,149,1) 0%, rgba(0,36,85,1) 100%);
            background: -ms-linear-gradient(top, rgba(0,84,149,1) 0%, rgba(0,36,85,1) 100%);
            background: linear-gradient(to bottom, rgba(0,84,149,1) 0%, rgba(0,36,85,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3e5673', endColorstr='#1a242e', GradientType=0 );
            box-shadow: rgb(10, 31, 43) 0px 0px 30px inset;

            min-width: 1080px;
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 50%;
            transform: translate( -50%, 0);
            z-index: 0;
            width: 100%;

            svg {
                -webkit-animation: backgroundfadein 2s; /* Safari, Chrome and Opera > 12.1 */
                -moz-animation: backgroundfadein 2s; /* Firefox < 16 */
                -ms-animation: backgroundfadein 2s; /* Internet Explorer */
                -o-animation: backgroundfadein 2s; /* Opera < 12.1 */
                animation: backgroundfadein 2s;
                opacity: 0.3;
                width: 100%;
            }
        }
    </style>
</head>
<body id="app-layout">
    <div id="calmgb" class="calm-background"></div>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" id="logo">
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row text-center task-header">
            <h2>Calm Demo App v2.0</h2>
        </div>
    </div>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $.get("./calmio-logo.svg", function (data) {
                $('#logo').html((new XMLSerializer().serializeToString(data)));
            });

            $.get('./calm_tree.svg', function (data) {
                $('#calmgb').html((new XMLSerializer().serializeToString(data)));
            });
        });
    </script>
</body>
</html>
