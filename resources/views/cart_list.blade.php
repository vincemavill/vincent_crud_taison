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
        <h3>Cart List</h3>
        <table style="width:50%;" border=1 cellspacing=0>
            <tr>
                <th>ID</th>
                <th>Name</th> 
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td> 
                    <td>{{ $row->quantity }}</td>
                    <td>{{ $row->price * $row->quantity }}</td>
                </tr>
            @endforeach
        </table>

        
    </body>

</html>


