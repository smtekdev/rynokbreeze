<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rynokbay</title>
    <style>
    .logout{
    position: absolute;
    right: 3%;
    top: 4%;
    }
    .WrapContent{
    position: absolute;
    /* display: flex; */
    height: 800px;
    /* justify-content: normal; */
    left: 38%;
    top: 30%;
    color: green;
    }
    </style>
</head>
<body>
<div class="WrapContent">
<h1>Registration Successful!</h1>
<p>Please wait for admin approval to access your account.</p>
</div>
<div class="logout">       
       <form method="POST" action="{{ route('logout') }}">
         @csrf
         <button type="submit" class="underline text-blue-500 btnst btadjst">{{ __('Logout') }}</button>
       </form>
</div>
</body>
</html>