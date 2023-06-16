<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rynokbay</title>
    <style>
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  th {
    background-color: #f2f2f2;
  }
  .lgset{
    position: absolute;
    margin-left: 43%;
    width: 106%;
}
</style>
</head>
<body>

<!-- logout and user info -->
<div class="">                                    
    <p class="font-semibold text-xl text-gray-800 leading-tight">
        Welcome, {{ Auth::user()->name }} <!-- User Name -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-blue-500 btnst">{{ __('Logout') }}</button>
        </form>
    </hp>
</div>
<!-- logout and user info end -->


<div class="lgset">
<a href="{{ route('login') }}">
<img src="../assets/images/logos/logo-6.png" alt="logo" style="max-width: 14% !important; margin-top: -16%;position: relative; z-index: 10; background: white; margin-left:1%;">
</a>
</div>
<!-- Header Ended -->


<h1>Coupons</h1>

@if (!is_null($coupons) && count($coupons) > 0)
  <table>
    <thead>
      <tr>
        <th>Coupon Code</th>
        <th>Discount</th>
        <th>Action</th> <!-- Add a new column for action -->
      </tr>
    </thead>
    <tbody>
      @foreach ($coupons as $coupon)
        <tr>
          <td>{{ $coupon->code }}</td>
          <td>{{ $coupon->discount }}</td>
          <td>
            <!-- Add delete form -->
            <form action="{{ route('coupons.destroy', ['id' => $coupon->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit">Delete</button>
            </form>
          </td> 
        </tr>
      @endforeach
    </tbody>
  </table>

@else
  <p>No coupons found.</p>
@endif


</body>
</html>