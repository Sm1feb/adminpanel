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

<?php if(isset($findrec[0])): ?>
<form action="<?php echo e(url('form-submit/'.$findrec[0]->id)); ?>" method="post">
    <?php else: ?>
    <?php endif; ?>

  <form action="<?php echo e(url(isset($findrec[0]) ? 'formssubmit/'. $findrec[0]->id :  'formssubmit')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

     
       <center> <h1 class="lo">CRUD</h1></center>
        <table class="hlo">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="firstname" value="<?php echo e(isset($findrec[0]->first_name) ? $findrec[0]->first_name:""); ?>"/></td>
            </tr>
            <table class="hlo">
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lastname" value="<?php echo e(isset($findrec[0]->last_name) ? $findrec[0]->last_name:""); ?>"/></td>
            <table class="hlo">
            <tr>
                <td>Marks1</td>
                <td><input type="text" name="marks1" value="<?php echo e(isset($findrec[0]->marks1) ? $findrec[0]->marks1:""); ?>"/></td>
            </tr>
            <table class="hlo">
            <tr>
                <td>Marks2</td>
                <td><input type="text" name="marks2" value="<?php echo e(isset($findrec[0]->marks2) ? $findrec[0]->marks2:""); ?>"/></td>
            </tr>
            </tr>
           
            <tr>
            <td colspan="2"><input type="submit" name="save" class="btn btn-primary mb-3"/></td>
</tr>

</table>

<table border="1" width="80%" class="tabl">
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
    <td colspan="6"><?php echo e($data->links('pagi')); ?></td>
</tr>
</table>

<style>
.pagination{
    list-style:none;
    margin-top:50px;
}
.pagination li{
    display:inline;
    padding:10px;
    border:solid 1px #000;
}
    </style>
   
</form>


<form action="<?php echo e(url('/search-record')); ?>" method="post">
    <?php echo e(csrf_field()); ?>

    <input type="text" name="name" class="earch"/>
    <input type="submit" value="Search" class="search"/>
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/display_form.blade.php ENDPATH**/ ?>