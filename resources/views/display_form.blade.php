<html>
    <head>
        <title></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style>
    .hlo{
        margin-left:20px;
        margin:auto;
        margin-top:30px;
    }
    .lo{
        font-size:60px;
    }
    .tabl{
        margin-left:100px;
    }
    .search{
        margin:auto;
        margin-left:5px;
        margin-top:25px;
    }
    .earch{
        margin-left:80px;
    }
    </style>
</head>
<body>
<div>
@if($errors->any())
    <div>
    @foreach($errors->all() as $error)
     {{ $error }}
    @endforeach
</div>
@endif
</div>

@if(isset($findrec[0]))
<form action="{{url('form-submit/'.$findrec[0]->id)}}" method="post">
    @else
    @endif

  <form action="{{url(isset($findrec[0]) ? 'formssubmit/'. $findrec[0]->id :  'formssubmit')}}" method="post">
        {{csrf_field()}}
     
       <center> <h1 class="lo">CRUD</h1></center>
        <table class="hlo">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstname" value="{{isset($findrec[0]->first_name) ? $findrec[0]->first_name:""}}"/></td>
            </tr>
            <table class="hlo">
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lastname" value="{{isset($findrec[0]->last_name) ? $findrec[0]->last_name:""}}"/></td>
            <table class="hlo">
            <tr>
                <td>Marks1</td>
                <td><input type="text" name="marks1" value="{{isset($findrec[0]->marks1) ? $findrec[0]->marks1:""}}"/></td>
            </tr>
            <table class="hlo">
            <tr>
                <td>Marks2</td>
                <td><input type="text" name="marks2" value="{{isset($findrec[0]->marks2) ? $findrec[0]->marks2:""}}"/></td>
            </tr>
            </tr>
           
            <tr>
            <td colspan="2"><input type="submit" name="save" class="btn btn-primary mb-3"/></td>
</tr>

</table>

<table border="1" width="80%" class="tabl">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Marks1</th>
        <th>Marks2</th>
        <th>Delete</th>
        <th>Edit</th>
</tr>
@foreach($data as $row)
<tr>
    <td>{{$row->id}}</td>
    <td>{{$row->first_name}}</td>
    <td>{{$row->last_name}}</td>
    <td>{{$row->marks1}}</td>
    <td>{{$row->marks2}}</td>
    <td><a href="{{'delete-data/' .$row->id}}">Delete</a></td>
    <td><a href="{{'edit-disp/' .$row->id}}">Edit</a></td>
</tr>
@endforeach
<tr>
    <td colspan="6">{{$data->links('pagi')}}</td>
</tr>
</table>

<style>
.pagination{
    list-style:none;
    margin-top:50px;
}
.pagination li{
    display:inline;
    padding:10px;
    border:solid 1px #000;
}
    </style>
   
</form>


<form action="{{url('/search-record')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="name" class="earch"/>
    <input type="submit" value="Search" class="search"/>
</form>
</body>
</html>