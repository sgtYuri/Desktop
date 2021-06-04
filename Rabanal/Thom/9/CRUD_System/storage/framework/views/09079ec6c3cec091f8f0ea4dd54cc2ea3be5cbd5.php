<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
   <h1><center>Personnel List</center></h1>
    <?php if(session('success')): ?>
    <kbd>
        <?php echo e(session('success')); ?>

    </kbd>
    <?php endif; ?>
    <?php if(@$trash): ?>
    <a href="<?php echo e(URL::route('index')); ?>">
   <button class="success">Go Back</button>
   </a>
<?php else: ?>
<a href="<?php echo e(URL::route('crud.create')); ?>">
    <button class="success">CREATE</button>
    </a>

   <a href="<?php echo e(URL::route('crud.trash')); ?>">
    <button class="success">View Trash</button>
    </a>
   <?php endif; ?>
    <hr>
    <table cellspacing="0">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Middle name</th>
                <th>Age</th>
                <th>Birhtday</th>
                <th>Rating</th>
                <th>BMI</th>
                <th></th>
            </tr>
        </thead>
    <tbody>
        <?php $__currentLoopData = $personnel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($x->first_name); ?></td>
                <td><?php echo e($x->last_name); ?></td>
                <td><?php echo e($x->middle_name); ?></td>
                <td><?php echo e($x->age); ?></td>
                <td><?php echo e($x->birthday); ?></td>
                <td><?php echo e($x->rating); ?></td> 
                <td><?php echo e($x->bmi ?? 'Not Set'); ?></td>
                <td>
                    <?php if(@$trash): ?> 
                    <a href="<?php echo e(URL::route('crud.force.delete',$x->id)); ?>">
                        <button class="success">Force Delete</button>
                        </a>
                    
                    <a href="<?php echo e(URL::route('crud.restore',$x->id)); ?>">
                        <button class="success">Restore</button>
                        </a>
                        <?php else: ?>
                    <a href="<?php echo e(URL::route('crud.bmi', $x->id)); ?>">
                    <button class="Success">SET BMI</button>
                    </a>

                    <a href="<?php echo e(URL::route('crud.delete', $x->id)); ?>">
                    <button class="danger">DELETE</button>
                    </a>
                    
                    <a href="<?php echo e(URL::route('crud.update', $x->id)); ?>">
                    <button class="default">UPDATE</button>
                    <?php endif; ?>
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    </table>
   
</body>
</html><?php /**PATH C:\Users\Administrator\Desktop\Thom\Laravel Day 4\Query_Exam\resources\views/index.blade.php ENDPATH**/ ?>