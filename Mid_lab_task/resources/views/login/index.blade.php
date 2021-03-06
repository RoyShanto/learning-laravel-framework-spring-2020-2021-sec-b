<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h1>Login hare!</h1>
    <!-- {{$errors}} -->

    <!-- @if($errors->any())
        @foreach($errors -> all() as $err)
        <li>{{$err}}</li>
        @endforeach
    @endif -->
    <form method="post">
    
        <!-- @csrf -->
        <!-- {{ csrf_field() }} -->
        <!-- <input type="hidden" name="_token" value=" {{ csrf_token() }}"> -->
        
        <fieldset>
            <legend>Login</legend>
            <table>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email"><br>
                        <span style="color: red;">@error('email'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password"><br>
                        <span style="color: red;">@error('password'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="submit"></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:right; text-decoration:none;"><a href="/registration">Sign Up</a></td>
                </tr>
            </table>
            
    
        </fieldset>
        
    </form>
    {{session('msg')}}
</body>
</html>