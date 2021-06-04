<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
    <h1><center>Update BMI</center></h1>
    <?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<p style="text-align:center; width:100%; color:red">
    <?php echo e($e); ?>

</p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    
    <form method="post" action="<?php echo e(URL::route('form.bmi.update', $data->id)); ?>">
        <?php echo csrf_field(); ?>
        <div>
    <label>Update BMI</label>
       

        <div>
            <label>Height (cm)</label>
            <input type="text" name="height" value= "<?php echo e($data->height); ?>">
            </div>

            <div>
                <label>Weight (kg)</label>
                <input type="text" name="weight" value= "<?php echo e($data->weight); ?>">
                </div>

       
        <div> 
            <button class="success">UPDATE</button> 
        </div>
    </form>
    <style>
        </style>
   </div>
</form>
</body>
</html><?php /**PATH C:\Users\Administrator\Desktop\Thom\Laravel Day 4\Query_Exam\resources\views/form/bmi/update.blade.php ENDPATH**/ ?>