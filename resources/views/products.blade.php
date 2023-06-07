<div class="row g-lg-4 g-3">
    @foreach($data as $data)
        <div class="product-col col-xxl-3 col-xl-4 col-lg-6 col-md-4 col-6">
            <div class="single-product-card">
                <div class="part-img">
                    <a href="#"><img src="/product/{{$data->image}}" alt="Product"></a>
                    <div class="cart-option cart-option-bottom">
                        <ul>
                            <li>
                            <form action="{{url('/addcart',$data->id)}}" method="post" enctype="multipart/form-data" id="add-to-cart-form">
    @csrf
    <a role="button" class="add-to-cart" onclick="document.getElementById('add-to-cart-form').submit();">
        <i class="fa-light fa-cart-shopping"></i>
    </a>
</form>
</li>
<li>
    <form action="{{url('/addwishlist',$data->id)}}" method="post" enctype="multipart/form-data" id="add-to-wishlist-form">
        @csrf
        <a role="button" class="add-to-wish" onclick="document.getElementById('add-to-wishlist-form').submit();">
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
                    <p class="price">{{$data->price}}$</p>
                     <div class="star">
                        <i class="fa-solid fa-star-sharp rated"></i>
                        <i class="fa-solid fa-star-sharp rated"></i>
                        <i class="fa-solid fa-star-sharp rated"></i>
                        <i class="fa-solid fa-star-sharp rated"></i>
                        <i class="fa-solid fa-star-sharp"></i>
                     </div>
                     <form action="{{url('/addcart',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="add-to-cart-btn">
                        <input type="number" name="quantity" min="1" value="1" max="999999" required>
                        <select name="quantity" id="quantity-select">
                            @for ($i = 1; $i <= 10; $i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                        <button type="submit">Add to Cart</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>




