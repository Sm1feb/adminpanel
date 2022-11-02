<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" href="mybootstrap.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="color.css">
	<style>
	</style>
</head>
<body>

	<header class="col-md-12">
		<div class="container">
			<div class="col-md-3" >
				<image src="logo.png" style="margin:15px 0px 5px 0px; float:left">
			</div>
			<div class="col-md-9"></div>
		</div>
	</header>
	<div class="col-md-12" style="background:#1C5978"> 
		<div class="container">
		<div class="col-md-3">
		<p style="color:white; font-weight:bold; font-family:arial; font-size:12px; margin:7px 0px; float:left; letter-spacing:1; word-spacing:3">Friday, 8th June 2012</p>
		</div>
		</div>
	</div>
	<div class="col-md-12" style="height:70%; min-height:200px">
		<div class="container">
            <form action="<?php echo e(url('loginsub')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

			<table class="table" style="width:150px; margin:40px auto">
				<tr>
					<td></td>
					<td style="color:#1C5978; font-weight:bold; text-align:center">Login</td>
				</tr>
				<tr>
					<td class="login-table-text">Username</td>
					<td><input type="text" name="user" class="login-table-input" required></td>
				</tr>
				<tr style="border:none">
					<td class="login-table-text">Password</td>
					<td><input type="password"  name="pass" class="login-table-input" style="font-size:30px;height:25px" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="s" class="btn btn-sm btn-primary" style="margin-left:60px; padding:2px 15px"}></td>
				</tr>
			</table>
</form>
		</div>
	</div>
	<footer style="clear:both">
		<div class="footer-line col-md-12"></div>
	</footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/login2.blade.php ENDPATH**/ ?>