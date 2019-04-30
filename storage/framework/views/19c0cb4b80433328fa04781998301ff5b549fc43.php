<?php $__env->startSection('content'); ?>


<div class="container">
	
			<div class="row align-items-center">
				<div class="col-lg-12">
					<img src="<?php echo e(asset('uploads/'.$ser->image)); ?>" width="100%" height="auto">
                    <h1>
                    <?php echo e($ser->title_en); ?>

                    </h1>
				<p>
                <?php echo $ser->description_en; ?>

                 </p>
          
               
              
                </div>
				
			</div>
	
		</div>


        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-en', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>