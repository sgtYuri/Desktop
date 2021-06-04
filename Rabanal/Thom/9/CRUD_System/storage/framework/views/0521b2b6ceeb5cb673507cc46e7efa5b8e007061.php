<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
    <h1><center>Create BMI</center></h1>
    <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p style="text-align:center; width:100%; color:red">
    <?php echo e($e); ?>

</p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    
    <form method="post" action="<?php echo e(URL::route('form.bmi')); ?>">
        <?php echo csrf_field(); ?>
        <div>
    <label>Create BMI</label>
       

        <div>
            <label>Height</label>
            <input type="text" name="last_name">
            </div>

            <div>
                <label>Weight</label>
                <input type="text" name="middle_name">
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
</html><?php /**PATH C:\Users\Administrator\Desktop\Thom\Laravel Day 4\Query_Exam\resources\views/form/bmi.blade.php ENDPATH**/ ?>