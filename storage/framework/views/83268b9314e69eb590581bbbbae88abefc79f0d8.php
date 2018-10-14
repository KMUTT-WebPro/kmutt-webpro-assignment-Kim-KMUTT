<!Doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Breaking News - <?php echo $__env->yieldContent('site_title'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	
	
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('fontawesome-free-5.3.1-web/css/all.css')); ?>">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation">
		<div class="container-fluid">
            <a class="navbar-brand" href="#">My Story</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(url('articles')); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('pages/about')); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('pages/contact')); ?>">Contact</a>
                    </li>

                    
                        
                    
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('articles/create')); ?>"><i class="fas fa-plus"></i></span> New Article</a>
                    </li>

                    <li class="nav-item">
                        <?php if(session()->has('locale')): ?>
                            <a class="nav-link" href="<?php echo e(url('lang/' . ((session()->get('locale')=='en')?'th':'en'))); ?>" class="btn"> <?php echo e(Str::upper((session()->get('locale')=='en')?'th':'en')); ?> </a>
                        <?php else: ?>
                            <a class="nav-link" href="<?php echo e(url('lang/th')); ?>" class="btn"> TH </a>
                        <?php endif; ?>

                    </li>



                    <!-- Authentication Links -->
                    
                    <?php if(auth()->guard()->guest()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(url('/login')); ?>"><i class="fas fa-sign-in-alt"></i>  Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=""><i class="fas fa-user-plus"></i> Register</a>
                        </li>

                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link  dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                <i class="fas fa-user"></i>
                                
                                Teerapong
                                <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href=""
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>

                                <form id="logout-form" action="" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                    

                    
                        
                            
                        
                        
                            
                            
                            
                            
                        
                    
                </ul>
                
                    
                    
                
            </div><!--/.nav-collapse -->
        </div>
    </nav>


			
				
					
					
						
					
					
						
					
					
						
							
						
					
				
				
					
						
					

					
						
							
						
							 
						

                    

					
					
					
						
						

					
						
							
								
								
								
							

							
								
									
									   
                                                     
										
									

									
										
									
								
							
						
					
					

				
			


	<div class="container">
		<?php echo $__env->yieldContent('content'); ?>
	</div>
	<div class="footer container-fluid">
		Copyright &copy; 2018-2019
	</div>

    <script type="text/javascript" src="<?php echo e(secure_asset('https://code.jquery.com/jquery-3.3.1.slim.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(secure_asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::asset('bootstrap/js/bootstrap.min.js')); ?>"></script>


</body>
</html>
