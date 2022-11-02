<?php if(session()->has('user_session')): ?>
<html>
<head>
</head>
<body>
    <Center><h1>Welcome you are logged in </h1></Center>
   <center> <h1>This is my home page</h1></center>
   <a href="<?php echo e(url('/logout-user')); ?>">Logout</a>
</body>
</html>
<?php else: ?>
<script>window.location="<?php echo e(url('/session-form')); ?>"</script>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\mysecondproject\resources\views/para.blade.php ENDPATH**/ ?>