<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Index Product</title>
</head>

<body>
  @if (Auth::check())
    <form action="{{ route('logout') }}" method="post">
      @csrf
      <button type="submit">Logout</button>
    </form>
    <p>Id : {{ $user->id }}</p>
    <p>Username currently logged in : {{ $user->name }}</p>
  @else
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
  @endif
  <a href="{{ route('show_cart') }}">Cart</a>
  @foreach ($products as $product)
    <p>Name : {{ $product->name }}</p>
    <img src="{{ url('storage/' . $product->image) }}" alt="{{ $product->name }}" height="200px">
    <form action="{{ route('show_product', $product) }}" method="get" style="margin-bottom: 8px">
      <button>Show Detail</button>
    </form>
    <form action="{{ route('delete_product', $product) }}" method="post" style="margin-bottom: 40px">
      @method('delete')
      @csrf
      <button type="submit">Delete Product</button>
    </form>
  @endforeach
</body>

</html>