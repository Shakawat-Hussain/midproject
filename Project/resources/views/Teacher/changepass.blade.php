@extends('layout.static')
@section('content')
<!DOCTYPE html>
<html>
    <title>Edit</title>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <h1>Change Password</h1>


    <form action="{{route('updatepass.submit')}}" Method="post">
        {{csrf_field()}}
       
        <div class="form-group">
 
 <label>Old Password  :</label><input type="text"  name="oldpass"><br> 
</div>
  
    <div class="form-group">
    <label>New Password  :</label><input type="password"  name="newpass"><br>
</div>    
  
@error('newpass')
<span class="text-danger">{{$message}}</span><br>
    @enderror 

    <br>
    <div class="form-group">
  <label>Confirm Password</label> <input type="password"  name="confpass">
  </div>            
  @error('confpass')
<span class="text-danger">{{$message}}</span><br>
    @enderror 
<br>
<input type="submit" value="Changepass">

</form>
</body>
</html>
@endsection