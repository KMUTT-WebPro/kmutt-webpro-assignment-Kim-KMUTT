<?php $__env->startSection('page_title', 'Create Article'); ?>

<?php $__env->startSection('content'); ?>
    <?php if($errors->any()): ?>
        <ul class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <?php echo Form::open(['url'=>'articles', 'method' => 'POST']); ?>


        <?php echo $__env->make('articles._form', ['submitButtonText' => 'Add Article'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo Form::close(); ?>



    
        
        
            
            
        
        
            
            
        
            
        
        
            
        
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>