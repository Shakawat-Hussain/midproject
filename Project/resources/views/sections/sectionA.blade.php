@extends('layout.static')
@section('content')
<!DOCTPE html>
<html>
<head>
<link rel="stylesheet" href="{{ asset('css/design.css') }}">
<title>View Student Records</title>

</head>
<body>
<table border = "1">
<tr>
<td>SId</td>
<td>name</td>
<td>CGPA</td>
<td>Course</td>
<td>Section</td>
<td>Department</td>
<td>Teacher_ID</td>


</tr>
@foreach ($students as $s)
<tr>
<td>{{ $s->Sid }}</td>
<td>{{ $s->student_name }}</td>
<td>{{ $s->cgpa }}</td>
<td>{{ $s->course }}</td>
<td>{{ $s->section }}</td>
<td>{{ $s->dept }}</td>
<td>{{ $s->id }}</td>

</tr>
@endforeach
</table>
<a href="/profile">Go Back</a>
</body>
</html>
@endsection