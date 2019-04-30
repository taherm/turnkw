  
  <?php $__env->startSection('content'); ?> 
                    <div class="col-md-12 main">
        <div class="content-top-1">
            
    <div id="mytoolbar"></div>
    <div class="mTop10">
    <form method="POST" action="/admin/<?php echo e($serv->id); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <br>
    <div class="form-group">
      <label for="exampleInputEmail1">Title(English)</label>
      <input type="text" class="form-control" name="title_en" value="<?php echo e($serv->title_en); ?>"  >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Title(Arabic)</label>
      <input type="text" class="form-control" name="title_ar" value="<?php echo e($serv->title_ar); ?>"  >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description(English)</label>
    <textarea name="description_en" class="editor" style="visibility:visible" placeholder="<?php echo e($serv->description_en); ?>"><?php echo e($serv->description_en); ?></textarea>  
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description(Arabic)</label>
    <textarea name="description_ar" class="editor" style="visibility:visible" placeholder="<?php echo e($serv->description_ar); ?>"><?php echo e($serv->description_ar); ?></textarea>  
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" name="image" value="<?php echo e($serv->image); ?>" >
    </div>
    <b>Add to Menu</b>
          <select name="menu" class="form-control">
                
                <?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                    <option value="<?php echo e($item->title_en); ?>"><?php echo e($item->title_en); ?></option>
                   
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </select>

   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>  
</form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>