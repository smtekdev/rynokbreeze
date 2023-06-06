<section class="section" id="menu">
    <div class="menu-item-carousel">
        <div style="display:flex; flex-wrap:wrap; justify-content:space-between;">



<!-- Product with add to cart -->

            @foreach($data as $data)
                <div style="width:calc(33.33% - 10px); margin-bottom:20px; padding:10px; box-sizing:border-box; background-image:url('/product/{{$data->image}}'); background-size:cover; background-position:center; position:relative; height:25rem;">
                <form action="{{url('/addcart',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div style="position:absolute; bottom:0; left:0; right:0; background-color:white; color:white !important; padding:10px;">
                            <h6 style="margin:0; display:flex; justify-content:center;">{{$data->price}}$</h6>
                            <h1 style="margin:0; font-size:18px; display:flex; justify-content:center;">{{$data->title}}</h1>
                            <p style="margin:0; font-size:14px; display:flex; justify-content:center;">{{$data->description}}</p>
                        </div>
                        <div style="display:flex; align-items:center; justify-content:space-between; margin-top:100%;">
                            <div style="display:flex; align-items:center;">
                                <input type="number" name="quantity" min="1" value="1" max="999999" required style="display:block; width:50px; padding: 8px; border: 1px solid #ccc; border-radius: 3px; text-align:center;">
                                <div style="display:flex; flex-direction:column; margin-left:10px;">
                                    <button type="button" onclick="if (this.previousElementSibling.value > 1) {this.previousElementSibling.value--;}" style="padding: 0.5rem;">&nbsp</button>
                                    <button type="button" onclick="this.nextElementSibling.value++" style="padding: 0.5rem;">&nbsp</button>
                                </div>
                            </div>
                            <input type="submit" value="ADD TO CART" style="background-color: #4CAF50; color: white; border: none; border-radius: 3px; cursor: pointer;width: 35%; border-radius:50px;padding: 2%;">
                        </div>
                    </form>
                    
                     <!-- Wishlist form -->
                    <form action="{{url('/addwishlist',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <input type="submit" value="ADD TO WISHLIST" style="background-color: #4285F4; color: white; border: none; border-radius: 3px; cursor: pointer; margin-top: 10px;border-radius: 50px; margin-top: -17%;width: 35%; position: absolute;  margin-left: 22%;padding: 2%;">
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</section>
