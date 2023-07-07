<style>
   .outset{
    position: absolute;
    right: 3%;
    top: 1%;
}

.lgset{
  margin-top: 6%;
}

@media screen and (max-width: 479px) and (min-width: 320px) {
    .outset {
        top: 1% !important;
    }
}

</style>

<link rel="icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}"> 

<!-- logout  -->
<div class="outset">                                    
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-blue-500 btnst">{{ __('Logout') }}</button>
        </form>
    </hp>
</div>
<!-- logout end -->


<div class="lgset">
<a href="{{ route('login') }}">
<img src="../assets/images/logos/logo-6.png" alt="logo" style="max-width: 14% !important;position: relative; z-index: 10; background: white; margin-left:42%;    margin-top: -5%;">
</a>
</div>



<!-- User orders -->


@php
    use App\Models\Products;
    $vendorName = Auth::user()->name;
    $data6 = App\Models\Order::where('seller_name', $vendorName)->get();
@endphp


<table style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
  <thead style="background-color: #2864c4; color:white !important;">
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Name</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Phone</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Address</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Product Name</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;">Image</th>
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
      <td style="border: 1px solid #ddd;text-align: center;">
            <img src="/product/{{$data6->image_url}}" alt="Product Image" width="100" height="75">
      </td>
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
