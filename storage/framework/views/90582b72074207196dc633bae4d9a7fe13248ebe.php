<?php $__env->startSection('content'); ?>




<div class="container">
	<br><br>

	<div class="row portfolio-list lightbox m-0" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
		<?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="col-sm-6 col-lg-3">
			<div class="portfolio-item">
				<span class="thumb-info thumb-info-lighten thumb-info-centered-icons">
					<span class="thumb-info-wrapper">
						<img src="<?php echo e(asset('uploads/'.$image->image)); ?>" alt="" height="210px">
						<span class="thumb-info-action">
							<a href="<?php echo e(asset('uploads/'.$image->image)); ?>" class="lightbox-portfolio">
								<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fa fa-search-plus"></i></span>
							</a>
						</span>
					</span>
				</span>
			</div>
		</div>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
	<br><br>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-en', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>