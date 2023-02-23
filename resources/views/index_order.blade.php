<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>List Order</title>
</head>
<body>
  @foreach ($orders as $order)
    <p>ID : {{ $order->id }}</p>
    <p>Name : {{ $order->user->name }}</p>
    <p>Order Date : {{ $order->created_at }}</p>
    @if ($order->is_paid == true)
      <p>Paid</p>
    @else
      <p>Unpaid</p>
      @if ($order->payment_receipt)
        <a href="{{ url('storage/' . $order->payment_receipt) }}">Show Payment Receipt</a>
      <form action="{{ route('confirm_payment', $order) }}" method="post">
        @csrf
        <button type="submit">Confirm Payment</button>
      </form>
      @endif
    @endif
    <br>
  @endforeach
  <br>
  <a href="{{ route('index_product') }}">Back</a>
</body>
</html>