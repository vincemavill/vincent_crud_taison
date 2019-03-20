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
    <br>

        <form action="http://127.0.0.1:8000/api/update_product/{{ $data->id }}"  method="post">
            <!-- <input type="hidden" name="the_id" value="{{ $data->id }}" > -->
            Name <input type="text" name="name" value="{{ $data->name }}"  required> <br>
            Price <input type="number" name="price" value="{{ $data->price }}" step="any" required> <br>
            Quantity <input type="number" name="quantity"  value="{{ $data->quantity }}" required> <br>
            Size <select name="size" value="{{ $data->size }}" required>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select><br>
            Code <input type="text" name="code" value="{{ $data->uniquecode }}" disabled> <br>
            <br>
            <br>
            <button type="submit">Update</button>
        </form>

        
    </body>

</html>


