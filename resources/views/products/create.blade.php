<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Create a product</h1>
 <div>
    @if($errors->any())

    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

    @endif

 </div>
    
    <form action="{{route('product.store')}}" method="post">

    @csrf
    @method('post')

<div>
    <label for="name">Name:</label><br><br>
     <input type="text" name="name" id="name" placeholder="Enter your name">
</div>
<br>
<div>
    <label for="qty">Quantity:</label><br><br>
     <input type="text" name="qty" id="qty" placeholder="Enter your quantity">
</div>
<br>
<div>
    <label for="price">Ikura desu ka:</label><br><br>
     <input type="text" name="price" id="price" placeholder="Enter your price">
</div>
<br>
<div>
    <label for="description">Description</label><br><br>
<input type="text" name="description" id="description" placeholder="Enter your description">

    <!-- <textarea name="description" id="" placeholder="Enter the description of the product" rows=10></textarea> -->
</div>
<br>
<div>
    
     <input type="submit" name="submit" id="submit" value="Save a new Product">
</div>

    </form>
</body>
</html>