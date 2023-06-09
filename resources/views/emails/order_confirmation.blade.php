<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Confirmation</title>
</head>
<body>
    <h2>Order Confirmation</h2>
    <p>Hi!</p>
    <p>Your order has been successfully placed.</p>
    <br>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($emailData['orderItems'] as $item)
            <tr>
                <td>{{ $item->productname }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price * $item->quantity }}$</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="3"></td>
                <td>Subtotal: ${{ $emailData['orderItems']->sum('price') }}</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td>Shipping: Free Shipping</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td>Total: ${{ $emailData['orderItems']->sum(function($item) {
                    return $item->price * $item->quantity;
                }) }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>