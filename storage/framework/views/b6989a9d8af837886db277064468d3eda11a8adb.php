<?php $__env->startSection('page_title', 'Articles Page'); ?>

<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mt-2 mb-1">
            <div class="card-header">
                    Article ID: <?php echo e($article->id); ?>

            </div>

            <div class="card-body">
                <h5 class="card-title">
                    <?php echo e($article->title); ?>


                </h5>
                <p class="card-text"><?php echo e($article->body); ?> </p>
            </div>
            <div class="card-footer">
                <p>
                    <?php echo e($article->published_at->diffForHumans()); ?>

                    <span class="float-right">
                        <a href="<?php echo e(url('articles/'. $article->id)); ?>" class="btn btn-dark">
                            more
                        </a>
                    </span>
                </p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>