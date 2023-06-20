

<style>
  td {
  max-width: 100px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
</style>

<table style="border-collapse: collapse; width: 100%; font-family: Arial, sans-serif;">
  <thead style="background-color: #2864c4; color:white !important;">
    <tr>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">Name</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">Email</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">Phone Number</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">Address</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">User Type</th>      
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;width:5%;">Password</th>
      <th style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">Action</th>
    </tr>
  </thead>
  <tbody>

        @php
            $data = App\Models\User::all();
        @endphp

    @foreach($data as $data)
    @if($data->usertype == "2")
    <tr>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">{{$data->name}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">{{$data->email}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">{{$data->phone}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">{{$data->address}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center;width:20px;">{{$data->usertype}}</td>      
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center; width:5%;">{{$data->password}}</td>
      <td style="border: 1px solid #ddd; padding: 8px; text-align: center; background-color:#B43434;width:20px;"><a href="{{url('/deleteuser',$data->id)}}" style="color:white !important;">Delete</a></td>     
    </tr>
    @endif
    @endforeach
</tbody>
</table>

