<html>
    <head>
        <title></title>
</head>
<body>
<table border="1" width="80%">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Marks1</th>
        <th>Marks2</th>
</tr>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($row->id); ?></td>
    <td><?php echo e($row->first_name); ?></td>
    <td><?php echo e($row->last_name); ?></td>
    <td><?php echo e($row->marks1); ?></td>
    <td><?php echo e($row->marks2); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td colspan="4"><?php echo e($data->links()); ?></td>
</tr>
</table>
</body>
</html><?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/display.blade.php ENDPATH**/ ?>