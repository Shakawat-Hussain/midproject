<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="{{asset('css/teacher.css') }}">
</head>
<body>
    <div id="header"><ul><a href="{{route('logout')}}">Logout</a>
    <li><a href="/sections">Sections</a></li>
    <li><a href="/schedule">Schedule</a></li>
    
    <li><a class="btn btn-primary" href="tprofile/edit">Edit Profile</a></li>
    <li class="dropdown"> <a href="javascript:void(0)" class="dropbtn">Settings</a>
    <div class="dropdown-content">
        <a href="/tprofile/settings/changepassword">Changepassword</a></li>
        <a href="/tprofile/theme">Theme</a></li>
</div>

</ul>
</div>
@yield('content')
@yield('stage2')
    <div id="footer">
    <a href="/login">Help</a>
    <a href="/login">___________________________________</a>
    <a href="/sections">Contact</a>
    
   



    </div>

</body>
</html>