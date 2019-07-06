<?php $__env->startSection('content'); ?>
<div class="col-md-12 main">
    <div class="content-top-1">

        <div class="mTop10">
            <form method="POST" action="/home-text" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="exampleInputPassword1">Home Page Text</label>
                    <textarea rows="2" cols="128" name="description" class="editor"><?php echo e($description); ?></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>

        </div>

    </div>
</div>

<div class="clearfix"> </div>
<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>