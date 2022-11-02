<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="color.css">
</head>
<body>
		<header class="col-md-12">
		<div class="container">
			<div class="col-md-3" >
				<image src="logo.png" style="margin:15px 0px 5px 0px; float:left">
			</div>
			<div class="col-md-2 col-md-offset-6">
            <a  href="login.html" class="logoutbtn">Logout</a>
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
					<li style="padding-top:25px"><a href="index.html" style="font-weight:bold">Page Summary</a></li>
					<li class="bordertb"><a href="addpage">Add Page</a></li>
					<li class="bordertop"><a href="#" style="font-weight:bold">Event Summary</a></li>
                    <li class="bordertop"><a href="#" style="font-weight:bold">Category Summary</a></li>
					<li class="bordertop"><a href="#" style="font-weight:bold">Add Category</a></li>
					<li class="bordertb"><a href="#">Add Event</a></li>
					<li class="bordertop"><a href="#" style="font-weight:bold">Change Password</a></li>
					<li class="bordertb"><a href="#" style="font-weight:bold">Module Summary</a></li>
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
				<p class="text-left">This section displays the list of Pages.</p>
				<p class="bordered text-center" style="padding:3px"><a href="#" style="text-decoration:underline; color:blue; font-size:12px">Click here</a>
						to create
						<a href="#" style="text-decoration:underline; color:blue; font-size:12px">New Page</a></p>
						
		<table class="table1">
			<tr class="table-1-head">
				<td colspan="2" style="padding:8px 15px 8px 15px; background:#EBEBEB;border-bottom:1px solid">Search</td>
			</tr>
			<tr class="table-1-row">
				<td style="padding:8px 15px 8px 15px">Search By Page Name</td>
				<td><input type="text" style="height:20px; width:180px"></td>
				
			</tr>
			<tr>
				<td style="padding:8px 15px 8px 15px; width:250px">Search By Parent Page</td>
				<td>
					<select style="width:180px">
						<option>< Select option ></option>
						<option>Login</option>
						<option>Index</option>
					</select>
					<button class="srchbtn" style="margin-left:10px">Search</button>
				</td>
			</tr>
		</table>
		<p style="padding-top:20px">Page 1 of 2, showing 10 records out  of 13 total, starting on record 1, ending on 10</p>
		<table class="table2">
			<thead>
				<tr>
					<th>Id</th>
					<th>Page Name</th>
					<th>No. of Sub Pages</th>
					<th>Status</th>
					<th>Edit</th>
					<th style="width:100px">Delete</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>27</td>
					<td>Home</td>
					<td>0</td>
					<td><img src="tick.jpg" class="tick"></td>
					<td><img src="edit.jpg" class="edit"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>33</td>
					<td>Contact Us</td>
					<td>0</td>
					<td><img src="tick.jpg" class="tick"></td>
					<td><img src="edit.jpg" class="edit"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>59</td>
					<td>About Us</td>
					<td>0</td>
					<td><img src="tick.jpg" class="tick"></td>
					<td><img src="edit.jpg" class="edit"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>48</td>
					<td>facilities</td>
					<td>0</td>
					<td><img src="images/tick.jpg" class="tick"></td>
					<td><img src="images/edit.jpg" class="edit"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>49</td>
					<td>Courses</td>
					<td>0</td>
					<td><img src="images/tick.jpg" class="tick"></td>
					<td><img src="images/edit.jpg" class="edit"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>50</td>
					<td>Addmissions</td>
					<td>1</td>
					<td><img src="images/tick.jpg" class="tick"></td>
					<td><img src="images/edit.jpg" class="edit"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>51</td>
					<td>faculty</td>
					<td>0</td>
					<td><img src="images/tick.jpg" class="tick"></td>
					<td><img src="images/edit.jpg" class="edit"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>52</td>
					<td>Students</td>
					<td>0</td>
					<td><img src="images/tick.jpg" class="tick"></td>
					<td><img src="images/edit.jpg" class="edit"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>53</td>
					<td>Departments</td>
					<td>0</td>
					<td><img src="images/tick.jpg" class="tick"></td>
					<td><img src="images/edit.jpg" class="edit"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td>55</td>
					<td>Administrator</td>
					<td>0</td>
					<td><img src="images/tick.jpg" class="tick"></td>
					<td><img src="images/edit.jpg" class="edit"></td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td colspan="5" style="border:none"><p style="text-align:left;margin:3px 0px 0px 15px; font-size:12px"><a href="#"><< previous</a> | 1 | 2 <a href="#">next >></a></p></td>
						<td style="border:none"><p style="margin:5px auto;"><a href="#" class="delbtn">Delete</a></p></td>
				</tr>
			</tbody>
		</table>
		</section>
				
		</div>
	</aside>
	<div class="footer-line">
		<footer></footer>
	</div>
	
</body>
</html>
<?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/pagesummary.blade.php ENDPATH**/ ?>