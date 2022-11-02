<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" href="{{asset('http://localhost/mysecondproject/resources/css/mybootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('http://localhost/mysecondproject/resources/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('http://localhost/mysecondproject/resources/css/color.css')}}">
	<script src="js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'.tinymce' });</script>
</head>
<body>
	<header class="col-md-12">
		<div class="container">
			<div class="col-md-3" >
				<image src="{{asset('logo.png')}}" style="margin:15px 0px 5px 0px; float:left">
			</div>
			<div class="col-md-2 col-md-offset-6">
				<a  href="#" class="logoutbtn">Logout</a>
			</div>
	</header>
		</div>
	<div class="col-md-12" style="background:#1C5978"> 
		<div class="container">
		<div class="col-md-3">
		<p style="color:white; font-weight:bold; font-family:arial; font-size:12px; margin:7px 0px; float:left; letter-spacing:1; word-spacing:3">Friday, 8th June 2012</p>
		</div>
		</div>
	</div>
	<aside>
		<div class="container ">
			<div class="col-md-2" style="padding:0px">
			<div class="col-md-12" style="padding:0px">
			 <aside>
				<ul type="none" style="padding:0px">
				<li style="padding-top:25px"><a href="form" style="font-weight:bold">Page Summary</a></li>
				<li class="bordertb"><a href="addpage">Add Page</a></li>
					
					<li class="bordertop"><a href="csummary" style="font-weight:bold">Category Summary</a></li>
					<li class="bordertop"><a href="category" style="font-weight:bold">Add Category</a></li>
					<li class="bordertop"><a href="product" style="font-weight:bold">Add Product</a></li>
					
					<li class="bordertop"><a href="#" style="font-weight:bold">Product Summary </a></li>
					<li class="bordertop"><a href="#" style="font-weight:bold">Change Password</a></li>
				
					<li class="bordertop" style="padding-bottom:10px">
						<p style="font-weight:bold">Login Information</p>
						<p>Username: admin</p>
						<p>Email: Example@domain.com</p>
					</li>
				</ul>
			</aside>	
				</div>
		</div>
		<div class="col-md-10 main-section">
			<section>
				<h3 style="font-size:16px; font-weight:bold; color:#1C5978; text-align:left;margin-left:0px;">Page Manager</h3>
				<hr style="margin:0px; width:600px; margin-bottom:10px" />
				<!--font: font-style font-variant font-weight font-size/line-height font-family -->
				<div style=" background:#F3F1F1;border:1px solid silver; font: bold 13px/13px arial ;padding:5px 0px 5px 15px ">Add Page</div>
				<div>
				@if(@isset($findrec[0]))
                <form action="{{url('c_editdata/'.$findrec[0]->id)}}" method="post">
            @else
            @endif
				<form action="{{url('page1')}}" method="post">
				{{csrf_field()}}
					<table class="addpage-table">
					
						<tr>
							<td style="width:250px; text-align:right">Name<span style="color:red">*</span></td>
							<td>
								<input type="text" name="name" style="width:200px" value="{{isset($findrec[0]->name) ? $findrec[0]->name:""}}">
							</td>
						</tr>
					
						<tr>
							<td style="width:250px; text-align:right">Content</td>
							<td>
								<input type="text" name="content" class="tinymce" style="height:150px" value="{{isset($findrec[0]->content) ? $findrec[0]->content:""}}">

							</td>
						</tr>
					
						<tr>
							<td style="width:250px; text-align:right">Status</td>
							<td>
								<input type="checkbox" name="status" style="width:50px; margin-right:20px" value="{{isset($findrec[0]->status) ? $findrec[0]->status:""}}">
							</td>
						</tr>
						<tr>
							<td colspan="2" >
							<div style="padding-left:25%"><input type="submit" name="save" class="savebtn" value="Save">
								&nbsp;&nbsp; 
							<a href="#" class="cnclbtn">Cancel</a>
							</td>
						</tr>
						
					</table>
</form>
				</div>
		</section>
				
		</div>
	</aside>
	<div class="footer-line" style="margin-top:15px">
		<footer></footer>
	</div>
	
</body>
</html>
