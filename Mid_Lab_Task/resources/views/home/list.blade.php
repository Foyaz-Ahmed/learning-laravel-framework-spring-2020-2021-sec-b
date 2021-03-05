<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product List!</h1>
    <a href="/home">back |</a>
    <a href="/logout">Logout</a>
    <br><br>
    <table border=1 cellspacing="0" >
        <tr align="center">
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Date of Sold</th>
            <th>Existing Product</th>
            <th>Upcoming Product</th>
            <th>Action</th>
        </tr>
        @foreach($product as  $value)
        <tr align="center">
            <td>{{ $value['id'] }}</td>
            <td>{{ $value['product_name'] }}</td>
            <td>{{ $value['quantity'] }}</td>
            <td>{{ $value['date_sold'] }}</td>
            <td>{{ $value['existing_product'] }}</td>
            <td>{{ $value['upcoming_product'] }}</td>
            <td>
                <a href="/home/edit/{{ $value['id'] }}">Edit</a>
                <a href="/home/delete/{{ $value['id'] }}">Delete</a>
                <a href="/home/details/{{ $value['id'] }}">Details</a>
            </td>
        </tr>
        <tr>
        @endforeach  
    </table>
</body>
</html>