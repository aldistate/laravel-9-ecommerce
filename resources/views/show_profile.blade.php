<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile : {{ $user->name}}</title>
</head>

<body>
  <p>User : {{ $user->name }}</p>
  <p>E-Mail : {{ $user->email }}</p>
  <p>Role : {{ $user->is_admin ? 'Admin' : 'Member' }}</p>

  @if ($errors->any())
    @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
  @endif
  <form action="{{ route('edit_profile') }}" method="post">
    @csrf
    <label>Name :</label>
    <br>
    <input type="text" name="name" value="{{ $user->name }}">
    <br>
    <label>Password :</label>
    <br>
    <input type="password" name="password">
    <br>
    <label>Confirm Password :</label>
    <br>
    <input type="password" name="password_confirmation">
    <br>
    <br>
    <button type="submit">Change Profile Details</button>
  </form>
</body>

</html>