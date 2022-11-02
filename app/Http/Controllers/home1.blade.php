@if(session()->has('user_session'))
<html>
<head>
</head>
<body>
    <Center><h1>Welcome you are logged in </h1></Center>
   <center> <h1>This is my home page</h1></center>
   <a href="{{url('/logout-user')}}">Logout</a>
</body>
</html>
@else
<script>window.location="{{url('loginsub')}}"</script>
@endif