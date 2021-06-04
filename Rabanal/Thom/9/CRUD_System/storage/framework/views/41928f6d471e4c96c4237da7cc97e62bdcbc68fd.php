<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
    <h1><center>Create Personnel</center></h1>
    <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p style="text-align:center; width:100%; color:red">
    <?php echo e($e); ?>

</p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    
    <form method="post" action="<?php echo e(URL::route('crud.create.save')); ?>">
        <?php echo csrf_field(); ?>
        <div>
    <label>Username</label>
        <div>
        <label>First Name</label>
        <input type="text" name="first_name">
        </div>

        <div>
            <label>Last Name</label>
            <input type="text" name="last_name">
            </div>

            <div>
                <label>Middle Name</label>
                <input type="text" name="middle_name">
                </div>

                <div>
                    <label>Age</label>
                    <input type="text" name="age">
                    </div>

                    <div>
                        <label>Birthday</label>
                        <input type="date" name="birthday">
                        </div>

                        <div>
                            <label>Rating</label>
                            <input type="text" name="rating">
                            </div>

       
        <div> 
            <button class="success">CREATE</button> 
        </div>
    </form>
    <style>
        </style>
   </div>
</form>
</body>
</html><?php /**PATH C:\Users\Administrator\Desktop\Thom\9\CRUD_System\resources\views/form/create.blade.php ENDPATH**/ ?>