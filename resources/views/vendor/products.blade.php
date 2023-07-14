

<style>
  input[type="text"]::placeholder,
  input[type="file"]::placeholder {
    text-align: center;
  }
</style>

<div style="background-color: #f7f7f7; padding: 20px;" class="text-center" >
<h1>Add New Product</h1><br>

<form action="{{ url('/uploadproducts') }}" method="post" enctype="multipart/form-data">
  @csrf

  <!-- User name field -->
  <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" placeholder="Write a title" required>
  </div>

  <div class="form-group">
    <label for="price">Price</label>
    <input type="text" name="price" class="form-control" placeholder="Write a price" required>
  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control-file" required>
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <input type="text" name="description" class="form-control" placeholder="Description" required>
  </div>

  <div class="form-group">
    <label for="description">City</label>
    <input type="text" name="location" class="form-control" placeholder="City" required>
  </div>

  <div class="form-group">
    <label for="description">Area</label>
    <input type="text" name="town" class="form-control" placeholder="Area" required>
  </div>

  <div class="form-group">
    <label for="category">Category</label>
    <select name="category" class="form-control" required>
      <option value="" disabled selected>Select a category</option>
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
      <!-- Add more category here -->
    </select>
  </div>

  <div class="form-group">
    <input type="submit" value="Save" class="btn btn-primary">
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