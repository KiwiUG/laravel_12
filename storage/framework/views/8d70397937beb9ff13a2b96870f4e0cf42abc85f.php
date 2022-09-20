<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<form action="<?php echo e(action([App\Http\Controllers\PagesController::class,'store'])); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    Name:<input type="text" name="name" required><br><br>
    Address:<input type="text" name ="address" required><br><br>
    DOB:<input type="date" name="DOB" required><br><br>
    Img:<input type="file" name="img" required><br><br>
    <input type="Submit">
</form>
</body>
</html>
<?php /**PATH C:\Games\XAMPP\htdocs\Class_12\resources\views/create.blade.php ENDPATH**/ ?>