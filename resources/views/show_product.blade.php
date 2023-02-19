<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $product->name }}</title>
</head>

<body>
  <p>Name : {{ $product->name }}</p>
  <p>Description : {{ $product->description }}</p>
  <p>Price : Rp.{{ number_format($product->price) }}</p>
  <p>Stock : {{ $product->stock }}</p>
  <img src="{{ url('storage/' . $product->image) }}" alt="{{ $product->name }}" height="200px">
  <br>
  <form action="{{ route('edit_product', $product) }}" method="get">
    <button>Edit Product</button>
  </form>
  <form action="{{ route('add_to_cart', $product) }}" method="post">
    @csrf
    <input type="number" name="amount" value="1">
    <button type="submit">Add to Cart</button>
  </form>
  <a href="{{ route('index_product') }}">Back</a>
</body>

</html>