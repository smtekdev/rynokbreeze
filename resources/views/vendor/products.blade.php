

<style>
  input[type="text"]::placeholder,
  input[type="file"]::placeholder {
    text-align: center;
  }
</style>

<div style="background-color: #f7f7f7; padding: 20px;" class="text-center" >
<h1>Add New Product</h1><br>
<form action="{{url('/uploadproducts')}}" method="post" enctype="multipart/form-data">

@csrf

<!-- User name field -->
<input type="hidden" name="user_name" value="{{ Auth::user()->name }}">

  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Title</label>
    <input type="text" name="title" placeholder="Write a title" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;width: 25rem;">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Price</label>
    <input type="text" name="price" placeholder="Write a price" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;width: 25rem;">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Image</label>
    <input type="file" name="image" required style="padding: 1px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;width: 25rem;">
  </div>
  <div style="margin-bottom: 10px;">
    <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Description</label>
    <input type="text" name="discription" placeholder="Description" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;width: 25rem;">
  </div>
  <div style="margin-bottom: 10px;">
        <label for="inputField" style="display: block; font-size: 16px; font-weight: bold; margin-bottom: 5px;">Category</label>
        <select name="category" required style="padding: 10px; font-size: 16px; border: 1px solid #ccc; border-radius: 5px;width: 25rem;">
            <option value="" disabled selected>Select a category</option>
            <option value="Featured">Featured</option>
            <option value="Health & Beauty">Health & Beauty</option>
            <option value="Home Services">Home Services</option>
            <option value="Fashion">Fashion</option>
            <option value="Sports">Sports</option>
            <option value="Saloon & Spa">Saloon & Spa</option>
            <option value="Food & Drink">Food & Drink</option>
            <option value="Clothing">Clothing</option>
            <option value="Home Appliances">Home Appliances</option>
            <option value="Fun & Entertainment">Fun & Entertainment</option>
            <option value="Sports & Fitness">Sports & Fitness</option>
            <option value="Department Stores">Department Stores</option>
            <option value="Home Appliances Aftermarket">Home Appliances Aftermarket</option>
            <option value="Automotive">Automotive</option>
            <option value="Furniture & Home decor">Furniture & Home decor</option>
            <option value="Kids Entertainment">Kids Entertainment</option>
            <option value="Rent a House / Room">Rent a House / Room</option>
            <option value="Rent an Office">Rent an Office</option>
            <option value="Buying & Selling">Buying & Selling</option>
            <option value="Digital Services">Digital Services</option>
            <option value="Beauty & Spa">Beauty & Spa</option>
            <option value="Things to do">Things to do</option>
            <option value="Restaurant">Restaurant</option>
            <option value="Hotels & Travels">Hotels & Travels</option>
            <option value="Health & Fitness">Health & Fitness</option>
            <option value="Aromatherapy">Aromatherapy</option>
            <option value="Medical Services">Medical Services</option>
            <option value="Orthopaedic Therapy">Orthopaedic Therapy</option>
            <option value="Dance Sessions">Dance Sessions</option>
            <option value="Fitness Classes">Fitness Classes   </option>            
        </select>
  </div>
  <div>
      <input type="submit" value="Save" style="border:1px solid black; padding:5px; border-radius:1rem; background-color:#B43434; color:white; width:7rem">
  </div>
</form>


<script>
function resizeImage() {
  const input = document.querySelector('input[type="file"]');
  const file = input.files[0];
  const reader = new FileReader();

  reader.onload = function() {
    const img = new Image();
    img.src = reader.result;

    img.onload = function() {
      const canvas = document.createElement('canvas');
      canvas.width = 398.78;
      canvas.height = 398.78;

      const ctx = canvas.getContext('2d');
      ctx.drawImage(img, 0, 0, canvas.width, canvas.height);

      const dataUrl = canvas.toDataURL(file.type);
      const blobData = dataURItoBlob(dataUrl);
      
    }
  };

  reader.readAsDataURL(file);
}

function dataURItoBlob(dataURI) {
  	const byteString = atob(dataURI.split(',')[1]);
  	const mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
  	const ab = new ArrayBuffer(byteString.length);
  	const ia = new Uint8Array(ab);
  	for (let i=0; i<byteString.length; i++) {
    	ia[i] = byteString.charCodeAt(i);
  	}
  	return new Blob([ab], {type: mimeString});
}
</script>