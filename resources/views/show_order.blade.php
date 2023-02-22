<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Order : {{ $order->user->name }}</title>
</head>
<body>
  <p>ID : {{ $order->id }}</p>
  <p>Name : {{ $order->user->name }}</p>
  <br>
  @foreach ($order->transactions as $transaction)
    <p>Product : {{ $transaction->product->name }}</p>
    <p>Amount : {{ $transaction->amount }}</p>
  @endforeach
  <br>
  <a href="{{ route('index_product') }}">Back</a>
</body>
</html>