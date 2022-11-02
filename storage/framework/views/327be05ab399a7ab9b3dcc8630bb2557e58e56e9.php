<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="color.css">
	<title>Document</title>
</head>
<body>
<form action="<?php echo e(url('page1')); ?>" method="post">
	<?php echo e(csrf_field()); ?>

	<table class="addpage-table">
	
		<tr>
			<td style="width:250px; text-align:right">Name<span style="color:red">*</span></td>
			<td>
				<input type="text" name="name" style="width:200px">
			</td>
		</tr>
	
		<tr>
			<td style="width:250px; text-align:right">Content</td>
			<td>
				<input type="text" name="content" class="tinymce" style="height:150px"></div>

			</td>
		</tr>
	
		<tr>
			<td style="width:250px; text-align:right">Status</td>
			<td>
				<input type="checkbox" name="status" style="width:50px; margin-right:20px">
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
</body>
</html><?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/pagination.blade.php ENDPATH**/ ?>