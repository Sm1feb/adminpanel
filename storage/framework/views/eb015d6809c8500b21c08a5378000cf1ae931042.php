<?php if(session()->has('user_session')): ?>
<html>
<head>
	<title>Admin panel</title>
	<link rel="stylesheet" href="<?php echo e(asset('http://localhost/mysecondproject/resources/css/mybootstrap.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('http://localhost/mysecondproject/resources/css/style.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('http://localhost/mysecondproject/resources/css/color.css')); ?>">
</head>
<body>
		<header class="col-md-12">
		<div class="container">
			<div class="col-md-3" >
				<image src="logo.png" style="margin:15px 0px 5px 0px; float:left">
			</div>
			<div class="col-md-2 col-md-offset-6">
            <a href="<?php echo e(url('/logout-user')); ?>">Logout</a>
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
					<li style="padding-top:25px"><a href="#" style="font-weight:bold">Page Summary</a></li>
					<li class="bordertb"><a href="addpage">Add Page</a></li>
					
					<li class="bordertop"><a href="csummary" style="font-weight:bold">Category Summary</a></li>
					<li class="bordertop"><a href="category" style="font-weight:bold">Add Category</a></li>
					<li class="bordertop"><a href="product" style="font-weight:bold">Add Product</a></li>
					<li class="bordertop"><a href="summaryproduct" style="font-weight:bold">Product Summary </a></li>
					<li class="bordertop"><a href="change" style="font-weight:bold">Change Password</a></li>
				
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
						<?php if(@isset($findrec[0])): ?>
                <form action="<?php echo e(url('c_editdata/'.$findrec[0]->id)); ?>" method="post">
            <?php else: ?>
            <?php endif; ?>
					<form action="<?php echo e(url('/search-record')); ?>" method="post">	
						<?php echo e(csrf_field()); ?>

		<table class="table1">
			<tr class="table-1-head">
				<td colspan="2" style="padding:8px 15px 8px 15px; background:#EBEBEB;border-bottom:1px solid">Search</td>
			</tr>
			<tr class="table-1-row">
				<td style="padding:8px 15px 8px 15px">Search By Page Name</td>
				<td><input type="text" name="n" style="height:20px; width:180px"><input type="submit"  value="search" class="srchbtn" style="margin-left:10px"></td>
				
			</tr>
			
					
				
		</table>
</form>
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
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
			<td><?php echo e($row->id); ?></td>
				<td><?php echo e($row->name); ?></td>
				<td><?php echo e($row->content); ?></td>
				<td><?php echo e($row->status); ?></td>
				<td><a href="<?php echo e('edit-disp/'.$row->id); ?>">Edit</a></td>
				<td><a href="<?php echo e('delete-data/'.$row->id); ?>">delete</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<tr>
	<td colspan="4"><?php echo e($data->links()); ?></td>
</tr>
</table>
			
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
<?php else: ?>
<script>window.location="<?php echo e(url('/session-form')); ?>"</script>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/form.blade.php ENDPATH**/ ?>