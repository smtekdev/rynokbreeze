
<!-- logout and user info -->
<div class="vendorwelcome">                                    
    <p class="font-semibold text-xl text-gray-800 leading-tight">
        Welcome, {{ Auth::user()->name }} <!-- User Name -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-blue-500 btnst">{{ __('Logout') }}</button>
        </form>
    </hp>
</div>
<!-- logout and user info end -->


<div class="vendorlg">
<a href="{{ route('login') }}">
<img src="../assets/images/logos/logo-6.png" alt="logo" style="max-width: 14% !important;position: relative; z-index: 10; background: white; margin-left:42%;    margin-top: -5%;">
</a>
</div>



<!-- User orders -->

@php
            $data6 = App\Models\Order::all();
        @endphp

<table style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
  <thead style="background-color: #2864c4; color:white !important;">
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Name</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Phone</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Address</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Product Name</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Price</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Quantity</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Total Price</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Delivery Status</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Refund</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data6 as $data6)
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data6->name}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data6->phone}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data6->address}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data6->productname}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data6->price}} $</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data6->quantity}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data6->price * $data6->quantity}} $</td>
      <td style="border: 1px solid #ddd; width: 7rem !important;">
      <form action="{{ route('updateDeliveryStatus') }}" method="POST">
        @csrf
        <input type="hidden" name="orderId" value="{{ $data6->id }}">
        <input type="hidden" name="email" value="{{$data6->email}}">
        <select name="delivery_status" onchange="this.form.submit()">
            <option value="pending" {{ $data6->delivery_status === 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="delivered" {{ $data6->delivery_status === 'delivered' ? 'selected' : '' }}>Delivered</option>
            <option value="cancelled" {{ $data6->delivery_status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        </select>
    </form>
      </td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">{{$data6->refund_status}}</td>
    </tr>
    @endforeach
</tbody>
<!-- below code new added need to remove if any issue -->
</table>
