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
    <?php if($errors->any()): ?>
    <div>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php echo e($error); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
</div>

  <form action="<?php echo e(url('/validation-form-submit')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

     
       <center> <h1 class="lo">CRUD</h1></center>
        <table class="hlo">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstname"/></td>
            </tr>
            <table class="hlo">
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lastname"/></td>
            <table class="hlo">
            <tr>
                <td>Marks1</td>
                <td><input type="text" name="marks1"/></td>
            </tr>
            <table class="hlo">
            <tr>
                <td>Marks2</td>
                <td><input type="text" name="marks2"/></td>
            </tr>
            </tr>
           
            <tr>
            
                <td colspan="2"><input type="submit" name="save" class="btn btn-primary mb-3"/></td>
</tr>
</table>


</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/validation-form.blade.php ENDPATH**/ ?>