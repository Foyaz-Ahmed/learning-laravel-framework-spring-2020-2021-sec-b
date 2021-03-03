<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration form</h1>
    <form method="post">
        @csrf
        <fieldset>
            <legend>Insert Product</legend>
            <table>
                <tr>   
                    <td>Name:</td>
                    <td><input type="int" name="name"></td>
                </tr>
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password">
                </tr>
                <tr>
                    <td>Confirm Password:</td>
                    <td><input type="password" name="cpassword">
                </tr>
                <tr>
                    <td>Company Name:</td>
                    <td><input type="text" name="cname">
                </tr>
                <tr>
                    <td>Country:</td>
                      <td>  
                        <input type="" name="country">
                    </td>
                </tr>
                <tr>
                    <td>City:</td>
                     <td>   
                        <input type="text" name="city">
                    </td>
                </tr>
                <tr>
                    <td>Phone No:</td>
                    <td><input type="text" name="phone"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Register"></td>
                </tr>
            </table>
            @foreach ($errors->all() as $err)

                    {{ $err }} <br>
                
                @endforeach
        </fieldset>
    </form>
</body>
</html>