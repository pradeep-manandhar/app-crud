<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Create a product</h1>
 
    
    <form action="{{route('product.store')}}" method="post">

    @csrf
    @method('post')
<div>
    <label for="name">Anata no Onamae wa nan desu ka:</label><br><br>
     <input type="text" name="name" id="name" placeholder="Enter your name" required>
</div>
<br>
<div>
    <label for="qty">Quantity:</label><br><br>
     <input type="text" name="qty" id="qty" placeholder="Enter your quantity" required>
</div>
<br>
<div>
    <label for="price">Ikura desu ka:</label><br><br>
     <input type="text" name="price" id="price" placeholder="Enter your price" required>
</div>
<br>
<div>
    <label for="description">Description</label><br><br>
<input type="text" name="description" id="description" placeholder="Enter your description" required>

    <!-- <textarea name="description" id="" placeholder="Enter the description of the product" rows=10></textarea> -->
</div>
<br>
<div>
    
     <input type="button" name="submit" id="submit" value="Save a new Product">
</div>

    </form>
</body>
</html>