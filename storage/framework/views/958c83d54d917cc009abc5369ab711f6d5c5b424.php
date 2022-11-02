<html>
    <head>
        <title></title>
</head>
<body>
    <form action="<?php echo e(url('edit-form/'.$findrec[0]->id)); ?>" method="post">
        <?php echo e(csrf_field()); ?>

        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstname" value="<?php echo e(isset($findrec[0]->first_name) ? $findrec[0]->first_name:""); ?>"/></td>
            </tr>
            <table>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lastname"  value="<?php echo e(isset($findrec[0]->last_name) ? $findrec[0]->last_name:""); ?>"/></td>
            </tr>
            <table>
            <tr>
                <td>Marks1</td>
                <td><input type="text" name="marks1"  value="<?php echo e(isset($findrec[0]->marks1) ? $findrec[0]->marks1:""); ?>"/></td>
            </tr>
            <table>
            <tr>
                <td>Marks2</td>
                <td><input type="text" name="marks2"  value="<?php echo e(isset($findrec[0]->marks2) ? $findrec[0]->marks2:""); ?>"/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="save"/></td>
</tr>
</table>


</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/edit1.blade.php ENDPATH**/ ?>