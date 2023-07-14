<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    .LogoSetting{
    position: relative;
    width: 13%;
    left: 44%;
  }
  </style>
</head>
<body>

<div>
<a href="{{ route('login') }}">
<img src="../assets/images/logos/logo-6.png" alt="logo" class="LogoSetting">
</a>
</div>


@php
    $data5 = App\Models\Products::all();
@endphp




<div class="container text-center">
  <h2>Feature Product Requests</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center">Product Name</th>
        <th class="text-center">Product Price</th>
        <th class="text-center">Product Image</th>
        <th class="text-center">Status</th>
        <th class="text-center">Approval</th>
      </tr>
    </thead>
    <tbody>
    @foreach($data5 as $product)
    @if($product->featureRequest && $product->category !== "Featured")
    <tr>
      <td>{{$product->title}}</td>
      <td>
        @if ($product->discounted_price)
          <span style="text-decoration: line-through;">{{$product->price}}$</span>
          {{$product->discounted_price}}$
        @else
          {{$product->price}}$
        @endif
      </td>
      <td>
        <img src="/product/{{$product->image}}" alt="{{$product->title}}" style="width: 100px; height: auto;">
      </td>
      <td>{{$product->category}}</td>
      <td>
        <form action="{{ route('admin.featured', $product->id) }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-primary" {{ $product->isFeatured ? 'disabled' : '' }}>Set Featured</button>
        </form>
      </td>
    </tr>
  @endif
  @endforeach
  </tbody>
  </table>
</div>

</body>
</html>