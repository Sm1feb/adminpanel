<html>
    <head>
</head>
<body>
<form action="<?php echo e(url('/simple')); ?>" method="post">
				<?php echo e(csrf_field()); ?>

                <input type="text" name="name">name
                <input type="text"name="content">Content
                <input type="checkbox" name="status">Status
                <input type="submit" name="save" value="Save">
</form><?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/simple.blade.php ENDPATH**/ ?>