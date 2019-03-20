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

        <form action="http://127.0.0.1:8000/api/save_product"  method="post">
            Name <input type="text" name="name" value=""  required> <br>
            Price <input type="number" name="price" value="" step="any" required> <br>
            Quantity <input type="number" name="quantity" value="" required> <br>
            Size <select name="size">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                </select>
            <br>
            <br>
            <button type="submit">Save</button>
        </form>

        
    </body>

</html>


