
<link rel="icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}"> 


<style>
    
a {
  text-decoration: none;
  color: #111;
}

p {
  text-indent: 20px;
  text-align: justify;
}

.button {
  width: 150px;
  height: 25px;
  margin: 5px 0 5px 0;
  color: #fff;
  background: rgba(71, 73, 77, 1);
  border: none;
  font-size: 14px;
  outline: none;
  border-radius: 5px;
}

.button:hover {
  background: rgba(71, 73, 77, 0.8);
}

.button:active {
  margin: 6px inherit 4px inherit;
  background: rgba(71, 73, 77, 0.8);
}

/*--- /GENERAL ---*/

#profile-edit-save {
  box-sizing:border-box;
  width:800px;
  margin:0 auto;
  padding:10px;
  border-bottom:1px solid rgba(84,183,222,0.5);
  background-color:rgba(84,183,222,0.3);
}

#editSave {
  display:block;
  margin: 0 auto;
  border:none;
  border-radius:5px;
  padding:10px 20px;
  background-color:#2699c7;
  color:#fff;
  font-size:14px;
  outline: none;
}

#profile-edit-area {
  width:800px;
  margin: 0 auto;
}

#edit-area-left, #edit-area-right {
  box-sizing:border-box;
}

#edit-area-left {
  width:400px;
  morgin:0;
  float:left;
}

#edit-area-right {
  width:400px;
  margin-left:400px;
}
#profile-edit-area {
  margin: 50px auto 10px;
}

#profile-edit-area table {
  margin: 0 auto 10px;
  vertical-align:top;
}

#profile-edit-area table tr {
  vertical-align:top;
}

.edit-title {
  padding-top:15px;
}

.profileInputBox {
  width:37rem;
    height:auto;
    margin:10px;
    padding:10px;
    border:none;
    border-radius:10px;
    box-shadow: 0 0 5px rgba(0,0,0,0.5);
    background-color:rgb(255, 255, 255);
    font-size:16px;
    color:rgb(63, 63, 63);
    outline: none;
}

#edit-area-right textarea {
  height:200px;
  resize:none;
}

   .outset{
    position: absolute;
    right: 3%;
    top: 4%;
}
.lgset{
  margin-top: 6%;
}


</style>


<!-- logout -->
<div class="outset AdjustLogOutProfile">                                    
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="underline text-blue-500 btnst">{{ __('Logout') }}</button>
        </form>
    </hp>
</div>
<!-- logout and user info end -->


<div class="lgset">
<a href="{{ route('login') }}">
<img src="../assets/images/logos/logo-6.png" alt="logo" style="max-width: 14% !important;position: relative; z-index: 10; background: white; margin-left:42%;    margin-top: -5%;">
</a>
</div>


<div id="profile-edit-save">
  <button id="editSave" onclick="saveProfile()">Edit Profile</button>
</div>

<div id="profile-edit-area">
  <form id="editForm" action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')

    <div id="edit-area-left">
      <table>
        <tbody>
          <tr>
            <td class="edit-title">Name:</td>
            <td><input type="text" name="name" id="name" class="profileInputBox" value="{{ auth()->user()->name }}" /></td>
          </tr>
          <tr>
            <td class="edit-title">Email:</td>
            <td><input type="email" name="email" id="email" class="profileInputBox" value="{{ auth()->user()->email }}" /></td>
          </tr>
          <tr>
            <td class="edit-title">Phone:</td>
            <td><input type="text" name="phone" id="phone" class="profileInputBox" value="{{ auth()->user()->phone }}" /></td>
          </tr>
          <tr>
            <td class="edit-title">Address:</td>
            <td><input type="text" name="address" id="address" class="profileInputBox" value="{{ auth()->user()->address }}" /></td>
          </tr>
          <tr>
            <td class="edit-title">Old Password:</td>
            <td><input type="password" name="old_password" id="old_password" class="profileInputBox" /></td>
          </tr>
          <tr>
            <td class="edit-title">New Password:</td>
            <td><input type="password" name="password" id="password" class="profileInputBox" /></td>
          </tr>
          <tr>
            <td class="edit-title">Confirm Password:</td>
            <td><input type="password" name="password_confirmation" id="password_confirmation" class="profileInputBox" /></td>
          </tr>
        </tbody>
      </table>
    </div><br>
    <button type="submit" style="background-color: #B43434; border: none; border-radius: 3px; padding: 10px 20px; color: white; cursor: pointer;margin-top: 55%;    margin-left: -7%;">Save Changes</button>
  </form>
</div>