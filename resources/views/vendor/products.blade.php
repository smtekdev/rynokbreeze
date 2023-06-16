



<div style="background-color: #f7f7f7; padding: 20px;" class="text-center">
<h1>Add New Product</h1><br>
<form action="{{url('/uploadproducts')}}" method="post" enctype="multipart/form-data">

@csrf

  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Title</label>
    <input type="text" name="title" placeholder="Write a title" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Price</label>
    <input type="text" name="price" placeholder="Write a price" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Image</label>
    <input type="file" name="image" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Description</label>
    <input type="text" name="discription" placeholder="Description" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
  </div>
  <div>
      <input type="submit" value="Save" style="border:1px solid black; padding:10px; border-radius:1rem; background-color:#61DBFF;">
  </div>
</form>