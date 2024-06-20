<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Order Food</h1>
    <form id="orderForm" action="/submit-order" method="post">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone"><br>
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>