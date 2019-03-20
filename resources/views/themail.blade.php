<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>
        <h1>CART</h1>
        <h3>Name: {{ $name }}</h3>
        <h3>Quantity: {{ $quantity }}</h3>
        <h3>Size: {{ $size }}</h3>
        <h3>Total: {{ $total }}</h3>
        
        
    </body>

</html>



