
<style>
  #openFormButton
  {
    position: absolute;
    right: 2%;
    top: 10rem;
    background-color: #126CC0;
    border-radius: 2rem;
    padding: 0.75%;
    color: white;
  }
</style>

<section class="section pdadjst" id="menu">
    <div class="menu-item-carousel">
        <div style="display:flex; flex-wrap:wrap; justify-content:space-between;">

        <button id="openFormButton" onclick="scrollToForm()">Add New Product</button>


        @php
        $vendorName = Auth::user()->name;
        $data5 = App\Models\Products::where('user_name', $vendorName)->get();
        @endphp

        @foreach($data5 as $product)
            <div style="width:calc(33.33% - 10px); margin-bottom:20px; padding:10px; box-sizing:border-box; background-image:url('/product/{{$product->image}}'); background-size:cover; background-position:center; position:relative; height:25rem;margin-top: 5%;" class="ProductImageAdjust">
                <div action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="position:absolute; bottom:0; left:0; right:0; background-color:white; color:white !important; padding:10px;">
                        <div style="display: flex; justify-content: center;">
                            <h6 style="margin: 0; color: black;">
                                @if ($product->discounted_price)
                                    <span style="text-decoration: line-through;">{{$product->price}}$</span>
                                @else
                                    {{$product->price}}$
                                @endif
                            </h6>
                            @if ($product->discounted_price)
                                <h6 style="margin: 0; color: black; margin-left: 10px;">
                                    {{$product->discounted_price}}$
                                </h6>
                            @endif
                        </div>
        
                        <h1 style="margin:0; font-size:18px; display:flex; justify-content:center;color:black;">{{$product->title}}</h1>
                        <p style="margin:0; font-size:14px; display:flex; justify-content:center;color:black;">{{$product->description}}</p>
                    </div>
                    <div style="display:flex; align-items:center; justify-content:space-between; margin-top:100%;">
                        <div class="button-container">
                            <form action="{{ url('/productdelete', $product->id) }}" method="POST" class="btncr">
                                @csrf
                                <button type="submit" class="btn btn-warning sbmbtn DeleteBtn">Delete</button>
                            </form>
        
                            <a href="{{ route('vendor.updateview', $product->id) }}" class="btn btn-primary btanc DeleteBtn">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        </div>
    </div>
    
     <!-- Upload Product -->
     <div id="formContainer" class="hidden">
     @include("vendor.products")
     </div>
    <!-- Upload Product End-->

<br><br><br>
<div class="text-center">
    <h1>Create Discount Coupon</h1>
    <br>
    <form action="/coupons" method="POST">
  @csrf
  <div class="form-group">
    <label for="discount">Discount Amount</label>
    <input type="number" class="form-control" id="discount" name="discount" placeholder="Enter discount amount" required>
  </div>
  <div class="form-group">
    <label for="coupon">Enter coupon code</label>
    <input type="text" class="form-control" id="coupon" name="coupon" placeholder="Enter coupon code" required style="position:relative; z-index:1;">
  </div>
  <button type="submit" class="btn btn-primary">Create Coupon</button>
</form>
<br>
<a href="{{ route('vendor.coupons') }}">View All Coupons</a>
</div>
</section>

<script>
const openFormButton = document.getElementById("openFormButton");
const formContainer = document.getElementById("formContainer");
openFormButton.addEventListener("click", () => {
  formContainer.classList.toggle("hidden");
  formContainer.scrollIntoView({ behavior: "smooth" });
});
function scrollToForm() {
  formContainer.scrollIntoView({ behavior: "smooth" });
  formContainer.classList.toggle("hidden");
}
</script>
   