<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>
    <br>
        <h3>Add to Cart</h3>
        <form action="http://127.0.0.1:8000/api/product_addcart/{{ $data->id }}"  method="post">
            <!-- <input type="hidden" name="the_id" value="{{ $data->id }}" > -->
            Name <b>{{ $data->name }}</b> <br>
            Price <b>{{ $data->price }}</b> <br>
            Stock <b>{{ $data->quantity }}</b><br>
            Size <b>{{ $data->size }}</b><br>
            <br>
            Quantity <input type="number" name="quantity" min="1" max="{{ $data->quantity }}"  required> <br>

            <br>
            <br>
            <button type="submit">Submit</button>
        </form>

        
    </body>

</html>


