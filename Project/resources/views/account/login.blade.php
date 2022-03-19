<!DOCTYPE html>
<html>
<head>

</head>

    <title>Sign IN Form</title>
    <body>
       <form action="{{route('login.submit')}}"   Method="post">
               {{@csrf_field()}}
               <centre>
        <h1>Sign In</h1>
    
<table>
        <tr><th>Email</th><th>Password</th></tr>
        <tr><td><input type="text" id="email" name="email"  placeholder="Enter email"></td><td><input type="password" id="password" name="password"  placeholder="Enter password"></td></tr>
        
</table>

        <br>
        
        <input type="submit" value="Login"><br>
        
        <br>
        <br>
        <h2>New here? register now</h2><br>
       <a href="/signup">Teacher registration</a><br>  
       </centre>
</form>



<!--<form action="{{route('login.submit')}}" method="post" >

    <div class="col-md-6">

    <h2> Student Login </h2>

        <label> Student Name </label>

        <input type="text" name="uname" class="form-control" placeholder="Enter your name" >

        <label> Student Name </label>

        <input type="password" name="password" class="form-control" placeholder="Enter your password" >

        <br>

        <input type="submit" class="btn-btn-primary"  value="Login" >

</div><-->




</form>
</body>
</html>