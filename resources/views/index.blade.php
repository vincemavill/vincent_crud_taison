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

        <a href="/cartlist">
            <button type="submit">Cart List</button>
        </a>
        <br>
        <br>
        <table style="width:50%;" border=1 cellspacing=0>
            <tr>
                <th>ID</th>
                <th>Name</th> 
                <th>Price</th>
                <th>Quantity</th>
                <th>Size</th>
                <th>Code</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td> 
                    <td>{{ $row->price }}</td>
                    <td>{{ $row->quantity }}</td>
                    <td>{{ $row->size }}</td>
                    <td>{{ $row->uniquecode }}</td>
                    <td>
                        <a href="/edit/{{ $row->id }}">
                            <button type="submit">Edit</button>
                        </a>
                    </td>
                    <td>
                        <form action="http://127.0.0.1:8000/api/delete/{{ $row->id }}">
                        <button type="submit">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/addcart/{{ $row->id }}">
                            <button type="submit">Add to Cart</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <br>
        <a href="/add">
            <button type="submit">Add New Product</button>
        </a>
    </body>
</html>


