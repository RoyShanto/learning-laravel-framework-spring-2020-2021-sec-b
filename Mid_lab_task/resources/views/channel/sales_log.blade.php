<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Product</title>
</head>
<body>

    <h1>Sell Products!</h1>
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
            <legend>Sell Products</legend>
            <table>

            <tr>
                <td>customer_name:</td>
                <td>
                    <input type="text" name="customer_name"><br>
                    <span style="color: red;">@error('customer_name'){{$message}}@enderror</span>
                </td>
            </tr>
            <tr>
                <td>address:</td>
                <td>
                    <input type="text" name="address"><br>
                    <span style="color: red;">@error('address'){{$message}}@enderror</span>
                </td>
            </tr>

                <tr>
                    <td>phone:</td>
                    <td>
                        <input type="number" name="phone"><br>
                        <span style="color: red;">@error('phone'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td>product_id:</td>
                    <td>
                        <input type="number" name="product_id"><br>
                        <span style="color: red;">@error('product_id'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td>product_name:</td>
                    <td>
                        <input type="text" name="product_name"><br>
                        <span style="color: red;">@error('product_name'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td>unit_price:</td>
                    <td>
                        <input type="number" name="unit_price"><br>
                        <span style="color: red;">@error('unit_price'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td>quantity:</td>
                    <td>
                        <input type="number" name="quantity"><br>
                        <span style="color: red;">@error('quantity'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td>total_price:</td>
                    <td>
                        <input type="number" name="total_price"><br>
                        <span style="color: red;">@error('total_price'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td>date_sold:</td>
                    <td>
                        <input type="date" data-date-format="YYYY MMMM DD" name="date_sold"><br>
                        <span style="color: red;">@error('date_sold'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td>payment_type:</td>
                    <td>
                        <select name="payment_type" id="">
                            <option value="cash">cash</option>
                            <option value="card">card</option>
                            <option value="online">online</option>
                        </select><br>
                        <!-- <input type="text" name="payment_type"><br> -->
                        <span style="color: red;">@error('payment_type'){{$message}}@enderror</span>
                    </td>
                </tr>
                <tr>
                    <td>status:</td>
                    <td>
                        <input type="text" name="status"><br>
                        <span style="color: red;">@error('status'){{$message}}@enderror</span>
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="Sign Up"></td>
                    <td></td>
                </tr>
            </table>

        </fieldset>

    </form>
    {{session('msg')}}
</body>
</html>
