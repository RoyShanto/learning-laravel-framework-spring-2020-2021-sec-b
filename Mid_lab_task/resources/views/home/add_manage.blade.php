<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
</head>
<body>

    <h1>Login hare!</h1>
    <form method="post">
    
        <!-- @csrf -->
        <!-- {{ csrf_field() }} -->
        <!-- <input type="hidden" name="_token" value=" {{ csrf_token() }}"> -->
        
        <fieldset>
            <legend>Add Customer</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Shifts</td>
                    <td><input type="text" name="shifts"></td>
                </tr>
                <tr>
                    <td>Salary</td>
                    <td><input type="text" name="salary"></td>
                </tr>
                
                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                    <td></td>
                </tr>
            </table>
    
        </fieldset>
    </form>
</body>
</html>