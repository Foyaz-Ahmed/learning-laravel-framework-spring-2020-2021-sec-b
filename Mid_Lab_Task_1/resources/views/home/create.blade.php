<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Store  Product</h1>
    <form method="post">
        @csrf
        <fieldset>
            <legend>Insert Product</legend>
            <table>
                <tr>   
                    <td>Customer Name:</td>
                    <td><input type="int" name="customer_name"></td>
                </tr>
                <tr>
                    <td>Customer Address:</td>
                    <td><input type="text" name="address"></td>
                </tr>
                <tr>
                    <td>Phone:</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td>Product Id:</td>
                    <td>
                        <input type="text" name="product_id">
                        
                    </td>
                </tr>
                <tr>
                    <td>Product Name:</td>
                    <td><input type="text" name="product_name"></td>
                </tr>
                <tr>
                    <td>Unit Price:</td>
                    <td><input type="text" name="unit_price"></td>
                </tr>
                <tr>
                    <td>Quantity:</td>
                    <td><input type="text" name="quantity"></td>
                </tr>
                <tr>
                    <td>Total Price:</td>
                    <td><input type="text" name="total_price"></td>
                </tr>
                <tr>
                    <td>Date Sold:</td>
                    <td><input type="date" name="current_date"></td>
                </tr>
                <tr>
                    <td>Payment Type:</td>
                    <td>
                        <select name = "payment_type">
                            <option value="Cash">Cash</option>
                            <option value="Card">Card</option>
                            <option value="Online">Online</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><input type="text" name="status"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Insert"></td>
                </tr>
            </table>
        </fieldset>
        @foreach ($errors->all() as $err)

                    {{ $err }} <br>
                
                @endforeach
    </form>
</body>
</html>