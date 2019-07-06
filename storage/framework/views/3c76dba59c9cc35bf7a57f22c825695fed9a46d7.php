<?php $__env->startSection('content'); ?>
<div class="col-md-12 main">
    <div class="content-top-1">

        <div class="mTop10">



            <b>Portfolio Images</b>

            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 text-center">
                        <a href="/">
                            <img class="img-thumbnail img-responsive" src="<?php echo e(asset('/uploads/'.$image->image)); ?>" /> </a>
                        <form method="POST" action="<?php echo e(url('/admin/delete-portfolio/'.$image->id)); ?>" class="delete">
                            <?php echo e(csrf_field()); ?>

                            <input name="_method" value="delete" type="hidden">
                            <button class="btn btn-danger" type="submit">X</button>
                        </form>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <br>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="clearfix"> </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>