<html>
    <head>
        <title></title>
</head>
<body>
    <form action="<?php echo e(url('form-submit')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstname"/></td>
            </tr>
            <table>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lastname"/></td>
            </tr>
            <table>
            <tr>
                <td>Marks1</td>
                <td><input type="text" name="marks1"/></td>
            </tr>
            <table>
            <tr>
                <td>Marks2</td>
                <td><input type="text" name="marks2"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="save"/></td>
</tr>
</table>
<table border="1" width="80%">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Marks1</th>
        <th>Marks2</th>
        <th>Delete</th>
        <th>Edit</th>
</tr>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($row->id); ?></td>
    <td><?php echo e($row->first_name); ?></td>
    <td><?php echo e($row->last_name); ?></td>
    <td><?php echo e($row->marks1); ?></td>
    <td><?php echo e($row->marks2); ?></td>
    <td><a href="<?php echo e('delete-data/' .$row->id); ?>">Delete</a></td>
    <td><a href="<?php echo e('edit-disp/' .$row->id); ?>">Edit</a></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td colspan="6"><?php echo e($data->links()); ?></td>
</tr>
</table>

</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/edit.blade.php ENDPATH**/ ?>