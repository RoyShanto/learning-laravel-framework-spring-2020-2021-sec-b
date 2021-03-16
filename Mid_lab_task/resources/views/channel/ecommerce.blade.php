<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Physical Store</title>
</head>
<body>
<h1>Sales Chanel</h1>
    <a href="/system/sales/physical_store"> Physical Store</a>&nbsp;&nbsp;&nbsp;
    <a href="/system/sales/social_media"> Social Media</a>&nbsp;&nbsp;&nbsp;
    <a href="/system/sales/ecommerce"> Ecommerce Web App</a>&nbsp;&nbsp;&nbsp;
    <a href="/logout">Logout</a>

    <h1>Ecommerce Store</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Customer Name</td>
            <td>Address</td>
            <td>Phone</td>
            <td>Product_id</td>
            <td>Product_name</td>
            <td>Unit Price</td>
            <td>Quantity</td>
            <td>Total Price</td>
            <td>Date Sold</td>
            <td>Payment Type</td>
            <td>Status</td>
        </tr>
    @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->customer_name}}</td>
            <td>{{$user->address}}</td>
            <td>{{$user->phone}}</td>
            <td>{{$user->product_id}}</td>
            <td>{{$user->product_name}}</td>
            <td>{{$user->unit_price}}</td>
            <td>{{$user->quantity}}</td>
            <td>{{$user->total_price}}</td>
            <td>{{$user->date_sold}}</td>
            <td>{{$user->payment_type}}</td>
            <td>{{$user->status}}</td>
        </tr>
    @endforeach
    </table>

    <p>number of products sold for current date = {{ $td }}</p>
    <p>number of products sold for last seven days = {{ $wd }}</p>

</body>
</html>
