<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from revelecommerce.codebasket.net/revel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:46:21 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rynok Bay</title>

    <link rel="icon" type="image/x-icon" href="../assets/images/logos/logo-6s.png">
    <link rel="stylesheet" href="../assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/flaticon/flaticon.css">
    <link rel="stylesheet" href="../assets/vendor/css/nice-select.css">
    <link rel="stylesheet" href="../assets/vendor/css/flags.css">
    <link rel="stylesheet" href="../assets/vendor/css/slick.css">
    <link rel="stylesheet" href="../assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/css/meanmenu.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="grid/css/style.css">
    <link rel="stylesheet" href="demos/">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800&display=swap" rel="stylesheet"> 

            <!-- Font Awesome Icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        #button{
            background-color: #F8F8F8 !important;
        }
        .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 29%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.btnnc{
  background: transparent;
    padding: 0.2rem;
    width: 5rem;
    border-radius: 1rem;
    text-align: center;
    margin-left: -3%;
    color: white !important;
}

.boxset{
  margin-top: -20%;
    position: absolute;
    margin-left: 40%;
    background: #b6862f;
    padding: 2%;
    border-radius: 2rem;
}

    </style>
</head>

<body class="rev-7-body">

<!-- Header Started -->

@include('components.navbar')

<!-- Header Ended -->


<x-app-layout>

<a href="">
<img src="../assets/images/logos/logo-6.png" alt="logo" style="max-width: 14% !important; margin-top: -16%;position: relative; z-index: 10; background: white; margin-left:1%;">
</a>

<div id="top" style="">

<div style="display: flex;">

<table style="border-collapse: collapse; width: 100%; height:100%; margin: 0 auto;">
  <thead>  
    <tr style="text-align: center;">
      <!-- <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white; ">Product Image</th>       -->
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white; ">Product Name</th>
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white; ">Price</th>
    </tr>  
  </thead>
  <tbody>
    <form action="{{url('orderconfirm')}}" method="POST">
    @csrf
  @foreach($data4 as $data4)
    <tr style="text-align: center;">
    <td style="padding: 10px; border: 1px solid #ddd;">
      <input type="text" name="productname[]" value="{{$data4->title}}" hidden="">
      {{$data4->title}}
        </td>
      <td style="padding: 10px; border: 1px solid #ddd;">
      <input type="text" name="price[]" value="{{$data4->price}}" hidden="">
      {{$data4->price}} $
    </td>      
      @endforeach  
  </tbody>
</table>


</form>


<!-- Below code for remove/delete -->

<table style="border-collapse: collapse; width: 12%; height:100%; margin: 0 auto;">
  <thead>
    <tr style="text-align: center;">
      <th style="padding: 10px; background-color: #136ABF; border: 1px solid #ddd; color:white;">Action</th>
    </tr>  
  </thead>
  <tbody>
    @foreach($data3 as $data3) 
      <tr>
        <td style="padding: 3px; border: 1px solid #ddd; text-align: center;">
          <form action="{{url('/remove2' , $data3->id)}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-warning">Remove</button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

</div>


</x-app-layout>
    
    <script src="../assets/vendor/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/vendor/js/jquery.nice-select.min.js"></script>
    <script src="../assets/vendor/js/jquery.flagstrap.min.js"></script>
    <script src="../assets/vendor/js/slick.min.js"></script>
    <script src="../assets/vendor/js/owl.carousel.min.js"></script>
    <script src="../assets/vendor/js/jquery.meanmenu.min.js"></script>
    <script src="../assets/vendor/js/jquery.syotimer.min.js"></script>
    <script src="../assets/vendor/js/jquery-modal-video.min.js"></script>
    <script src="../assets/vendor/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/main.js"></script>
  <script>
    var modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}
span.onclick = function() {
  modal.style.display = "none";
}
    window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>

<script>
    $("#order").click(
        function()
        {
            $("#appear").show();
        }
    );
</script>

<script>
    $("#close").click(
        function()
        {
            $("#appear").hide();
        }
    );
</script>


</body>


<!-- Mirrored from revelecommerce.codebasket.net/revel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Mar 2023 09:46:44 GMT -->
</html>
