<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        @yield('title')
    <style>
        body{
            width:90%;
            margin:0 auto;
        }
        a{
            color:black;
        }
        a:hover{
            color:black;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="row text-center pt-2">
        <div class="col py-2 border border-dark bg-primary"><a class="text-light" href="/">ENTRADAS</a></div>
        <div class="col py-2 border border-dark bg-primary"><a class="text-light" href="/ejer1_2">BIOGRAFÍA</a></div>
        <div class="col py-2 border border-dark bg-primary"><a class="text-light" href="/ejer1_3">LIBROS</a></div>
        <div class="col py-2 border border-dark bg-primary"><a class="text-light" href="/ejer1_4">SUGERENCIAS</a></div>
    </div>

    <div class="row">
        @yield('texto')
    </div>
</body>
</html>