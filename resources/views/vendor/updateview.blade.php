<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">



<head>
    <base href="/public">
@include("admin.admincss")
</head>
<body style="">
  
@include("admin.navbar")



<div style="background-color: #f7f7f7; padding: 20px;">

  <form action="{{url('/update' ,$data->id)}}" method="post" enctype="multipart/form-data">

  @csrf

    <div style="margin-bottom: 10px;">
      <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Title</label>
      <input type="text" name="title" value="{{$data->title}}" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    <div style="margin-bottom: 10px;">
      <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Price</label>
      <input type="text" name="price" value="{{$data->price}}" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    
    <div style="margin-bottom: 10px;">
      <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Description</label>
      <input type="text" name="discription" value="{{$data->discription}}" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    <div style="margin-bottom: 10px;">
      <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Old Image</label>
      <img src="/product/{{$data->image}}" style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>
    <div style="margin-bottom: 10px;">
      <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">New Image</label>
      <input type="file" name="image" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;">
    </div>

    <div>
        <input type="submit" value="Save" style="border:1px solid black; padding:10px; border-radius:1rem; background-color:#61DBFF;">
    </div>
  </form>

  <br><br>

  <div>




@include("admin.adminscript")
   
</body>

</html>

