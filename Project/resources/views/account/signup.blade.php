<!DOCTYPE html>
<html>
    <title>Sign Up</title>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Register Now</h1>
    <form action="{{route('signup.submit')}}" Method="post">
        {{csrf_field()}}
        <div class="form-group">
    <label>First Name  :</label><input type="text" id="fname" name="first_name" value="{{old('first_name')}}"><br>
</div>
    @error('fname')
<span class="text-danger">{{$message}}</span><br>
    @enderror 
    <div class="form-group">
    <label>Last Name  :</label><input type="text" id="lname" name="last_name" value="{{old('last_name')}}"><br>
</div>    
    @error('lname')
<span class="text-danger">{{$message}}</span><br>
    @enderror 
    <div class="form-group">
    <label>UserName  :</label><input type="text" id="username" name="username" value="{{old('username')}}"><br>
</div>    
    @error('username')
<span class="text-danger">{{$message}}</span><br>
    @enderror 
    <div class="form-group">
    <label>MobileNo</label><input type="text" id="mobno" name="mobileno" value="{{old('mobileno')}}"><br>
</div>   
    @error('mobno')
<span class="text-danger">{{$message}}</span><br>
    @enderror 
    <label>Email  :</label><input type="text" id="userid" name="email" value="{{old('email')}}"><br>
        @error('email')
<span class="text-danger">{{$message}}</span><br>
    @enderror 
    <label>Password</label><input type="text" id="password" name="password"><br>
        @error('password')
<span class="text-danger">{{$message}}</span><br>
    @enderror 
    <label>ConfirmPassword</label><input type="text" id="confirmpassword" name="confirmpassword"><br>
        @error('confirmpassword')
<span class="text-danger">{{$message}}</span><br>
    @enderror 
    <label>Gender</label> <input  type="radio"  name="gender" value="Male">
             <label>Male</label>
  
             <input type="radio"  name="gender" value="Female">
             <label>Female</label>
  
             <input type="radio"  name="gender" value="others">
             <label>Others</label> <br>
             @error('gender')
<span class="text-danger">{{$message}}</span><br>
    @enderror 
  <br>
  <label>Department</label> <input type="checkbox" id="choice" name="department" value="CSE">CSE
                   <input type="checkbox" id="choice" name="department" value="EEE">EEE
                   <input type="checkbox" id="choice" name="department" value="BBA">BBA
                   <input type="checkbox" id="choice" name="department" value="LAW">LAW

<br>

        <br>
<input type="file" name="filetoupload">
<br>
        
   
      
        <input type="submit" value="Signup">

</form>
</body>
</html>

