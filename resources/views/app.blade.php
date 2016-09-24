<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style type="text/css">
        html, body {
            height: 100%;
        }


        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Roboto';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        h1.title {
            font-size: 96px;
            font-family: 'Lato';
        }

        h1.title small {
            display: block;
        }
    </style>
</head>
<body>
    @yield('content')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>