<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.add') }}" method="post">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" name="name" required>
    
        <label for="price">Product Price:</label>
        <input type="text" name="price" required>
    
        <label for="quantity">Product Quantity:</label>
        <input type="text" name="quantity" required>
    
        <button type="submit">Add Product</button>
    </form>
    
    <form action="{{ route('product.sell', ['productId' => $product->id]) }}" method="post">
        
        @csrf
        <label for="quantity_sold">Quantity Sold:</label>
        <input type="text" name="quantity_sold" required>
    
        <button type="submit">Sell Product</button>
    </form>
  </body>
</html>
</body>
</html>