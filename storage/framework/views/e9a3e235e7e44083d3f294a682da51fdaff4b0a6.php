<?php $__env->startSection('site_title', 'About Me'); ?>

<?php $__env->startSection('content'); ?>
	<div class="panel-header">
		<h1>About Me: <?php echo e($first); ?> <?php echo e($last); ?></h1> 
	</div>

	<p>I am a programmer who love in PHP and going to be a laravel geek.</p>
    <h4>Favorite Quote</h4>
    <blockquote>
        <p>Life is like marathon. To keep your balance, you must keep running.</p>
        <footer>Kim Lee</footer>
    </blockquote>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">My Skills</h3>
		</div>
		<div class="panel-heading">
			<ul class="list-group">
				<?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            		<li class="list-group-item"><?php echo e($skill); ?></li>
      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div>
	</div>

	<div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">
            <i class="glyphicon glyphicon-film"></i>
            One Piece
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">
            <i class="glyphicon glyphicon-music"></i>
			Versace on the floor
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">
            <i class="glyphicon glyphicon-heart"></i>
            Laravel 5_5
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 well well-lg">
            <i class="glyphicon glyphicon-plane"></i>
            Glasgow, Scotland
        </div>
    </div>

	
		
	

	
	
   		
   	

   	
   	

   	
   	
   		
	

	<br />
	
	

	<br />
	
	<img src="<?php echo e(URL::asset('images/laravel.png')); ?>" alt="Laravel logo" width="150" height="110">

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>