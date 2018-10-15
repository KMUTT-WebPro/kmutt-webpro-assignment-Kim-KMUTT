<?php $__env->startSection('page_title', 'Article No '.$article->id); ?>

<?php $__env->startSection('content'); ?>
    <div class="card mb-2">
        <div class="card-header">
            <h1><?php echo e($article->title); ?></h1>
        </div>

        <div class="card-body">
            <?php echo e($article->body); ?>

        </div>

        <div class="card-footer">
            By <strong><?php echo e($article->user->name); ?></strong>:&nbsp;
            <?php echo e($article->published_at->diffForHumans()); ?>


            <?php if (! ($article->tags->isEmpty())): ?>
                <div>
                    <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <span class="badge badge-info"> <?php echo e($tag->name); ?> </span> &nbsp
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-12 justify-content-end d-flex btn-toolbar">
            
                
            
            
            
            

            <div class="btn-group mr-1">
                <form action="<?php echo e(action('ArticleController@edit', $article->id, "/edit")); ?>" method="get">
                    <?php echo csrf_field(); ?>
                    
                    <button class="btn btn-primary" type="submit">
                        Edit
                    </button>
                </form>
            </div>
            <div class="btn-group">
                <form action="<?php echo e(action('ArticleController@destroy', $article->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>