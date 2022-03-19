@extends('layout.static')
@section('content')
<!DOCTYPE html>
<html>
    <title>Edit</title>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <h1>Editprofile</h1>

<form action="{{route('editprofile.submit')}}" Method="post">
        {{csrf_field()}}
       
        <div class="form-group">
   <label>First Name  :</label><input type="text"  name="first_name"><br>
 
</div>
  
    <div class="form-group">
    
    <label>Last Name  :</label><input type="text"  name="last_name"><br>
</div>    
  
     
    <div class="form-group">
   
    <label>MobileNo</label><input type="text"  name="mobileno"><br>
</div>   

    <br>
    <div class="form-group">
  
  <label>Department</label> <input type="text"  name="Department" ><br>
  </div>            

<br>
<input type="submit" value="Editprofile">

</form>
</body>
</html>
@endsection