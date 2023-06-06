<section class="section" id="menu">
    <div class="menu-item-carousel">
        <div style="display:flex; flex-wrap:wrap; justify-content:space-between;">



        @php
            $data5 = App\Models\Products::all();
        @endphp


            @foreach($data5 as $product)
                <div style="width:calc(33.33% - 10px); margin-bottom:20px; padding:10px; box-sizing:border-box; background-image:url('/product/{{$product->image}}'); background-size:cover; background-position:center; position:relative; height:25rem;">
                <div action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div style="position:absolute; bottom:0; left:0; right:0; background-color:white; color:white !important; padding:10px;">
                            <h6 style="margin:0; display:flex; justify-content:center;color:black;">{{$product->price}}$</h6>
                            <h1 style="margin:0; font-size:18px; display:flex; justify-content:center;color:black;">{{$product->title}}</h1>
                            <p style="margin:0; font-size:14px; display:flex; justify-content:center;color:black;">{{$product->description}}</p>
                        </div>
                        <div style="display:flex; align-items:center; justify-content:space-between; margin-top:100%;">
                            
      

                        <form action="{{ url('/productdelete', $product->id) }}" method="POST" class="btncr">
                        @csrf
                        <button type="submit" class="btn btn-warning sbmbtn">Delete</button>
                        </form>




                        </div>
</div>
                    
                </div>
            @endforeach
        </div>
    </div>
     <!-- Upload Product -->
     @include("vendor.products")
    <!-- Upload Product End-->
</section>

   