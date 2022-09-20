<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
</head>
<body>
<a href = "<?php echo e(url('/create')); ?>"><button>Create</button></a>
<table border="2">
    <tr>
        <th>Name</th>
        <th>DOB</th>
        <th>Address</th>
        <th>Image</th>
    </tr>
    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($student->name); ?></td>
        <td><?php echo e($student->dob); ?></td>
        <td><?php echo e($student->address); ?></td>
        <td><img src="<?php echo e(asset($student->img)); ?>" height="100px" width="50px"/></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</body>
</html>
<?php /**PATH C:\Games\XAMPP\htdocs\Class_12\resources\views/list.blade.php ENDPATH**/ ?>