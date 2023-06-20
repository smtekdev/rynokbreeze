<style>
    .image-container {
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}

.image {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
</style>

<div class="row g-lg-4 g-3">
    @foreach($data as $data)
        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
            <div class="single-product-card">
                <div class="part-img">
                    
                <!-- Product Image View -->
                
                <a href="{{ route('edit', ['id' => $data->id]) }}">
                  <div class="image-container" style="width: 398px; height: 398px;">
                    <div class="image" style="background-image: url('/product/{{$data->image}}');"></div>
                  </div>
                </a>


                    <div class="cart-option cart-option-bottom">
                        <ul>
                            <li>
                            <form action="{{url('/addcart',$data->id)}}" method="post" enctype="multipart/form-data" id="add-to-cart-form-{{$data->id}}">
    @csrf
    <a role="button" class="add-to-cart" onclick="document.getElementById('add-to-cart-form-{{$data->id}}').submit();">
        <i class="fa-light fa-cart-shopping"></i>
    </a>
</form>
</li>
<li>
    <form action="{{url('/addwishlist',$data->id)}}" method="post" enctype="multipart/form-data" id="add-to-wishlist-form-{{$data->id}}">
        @csrf
        <a role="button" class="add-to-wish" onclick="document.getElementById('add-to-wishlist-form-{{$data->id}}').submit();">
            <i class="fa-light fa-heart"></i>
        </a>
    </form>
                            </li>
                            <li>
                                <a role="button" class="quick-view">
                                    <i class="fa-light fa-image"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="view-product">
                                    <i class="fa-light fa-eye"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="part-txt">
                    <h4 class="product-name"><a href="#">{{$data->title}}</a></h4>
                    <p class="dscr">{{$data->description}}</p>
                    @if ($data->discounted_price)
                      <p class="price" style="display: inline-block; text-decoration: line-through; margin-right: 10px;">{{$data->price}}$</p>
                      <p class="price" style="display: inline-block;">{{$data->discounted_price}}$</p>
                    @else
                      <p class="price" style="display: inline-block;">{{$data->price}}$</p>
                    @endif
                     <div class="star">
                        <i class="fa-solid fa-star-sharp rated"></i>
                        <i class="fa-solid fa-star-sharp rated"></i>
                        <i class="fa-solid fa-star-sharp rated"></i>
                        <i class="fa-solid fa-star-sharp rated"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                     </div>
                     <form action="{{ url('/addcart', $data->id) }}" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="add-to-cart-btn">
                        <input type="hidden" name="quantity" value="1" min="1">
                        <button type="submit">Add to Cart</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>




