<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD app</title>
</head>
<body>

<h1>Product</h1>
<div>
    @if(session()->has('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
        @endif
</div>
<table border="1">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Qty</th>
    <th>Price</th>
    <th>Description</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

@foreach($products as $product)
<tr>
    <td>{{$product->id}}</td>
    <td>{{$product->name}}</td>
    <td>{{$product->qty}}</td>
    <td>{{$product->price}}</td>
    <td>{{$product->description}}</td>
    <td>
        <a href="{{route('product.edit',['product'=>$product])}}">Edit</a>
    </td>
     <td>
        <form action="{{route('product.delete',['product'=>$product])}}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </td>
    
   
</tr>
@endforeach

</table>


</body>
</html>

