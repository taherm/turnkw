<?php $__env->startSection('content'); ?>





<br><br>
<div class="container">
    <div class="row text-center">
        <div class="col">
            <img src="<?php echo e(asset('uploads/1.jpg')); ?>" width="100%" height="400px">
        </div>
    </div>
    
</div>




<br>
<div class="container">

    <div class="row align-items-center">
        <div class="col-lg-12">
            <?php echo $home_page_text; ?>

        </div>

    </div>

</div>

<br>



<div class="container">



    <div class="row portfolio-list sort-destination" data-sort-id="portfolio">

        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 isotope-item websites" id="websites">
            <div class="portfolio-item">
                <a href="<?php echo e(url('pages/'.$page->id)); ?>">
                    <span class="thumb-info thumb-info-centered-icons">
                        <span class="thumb-info-wrapper">
                            <img src="<?php echo e(asset('uploads/'.$page->image)); ?>" class="img-fluid" alt="">
                            <span class="thumb-info-title">
                                <span class="thumb-info-inner text-1 line-height-xs pt-1"><?php echo e($page->title_en); ?></span>

                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
</div>


<section class="section m-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Our <strong>Services</strong></h2>
            </div>
        </div>
        <div class="row text-center text-md-left mt-4">


            <div class="col-md-4">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-4">
                        <img class="img-fluid mb-4" src="<?php echo e(asset('uploads/vision.png')); ?>" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h4 class="mb-1">Vision</h4>
                        <p>A new dimension is added in all aspects of life with design, innovation, and achievement of
                            the best
                            quality, leading the industry with competitiveness and team spirit, and becoming the most
                            successful
                            design company in our region</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-4">
                        <img class="img-fluid mb-4" src="<?php echo e(asset('uploads/mission.png')); ?>" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h4 class="mb-1">Mission</h4>
                        <p>A brand is created to add more precious value to the world’s success and beauty.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-4">
                        <img class="img-fluid mb-4" src="<?php echo e(asset('uploads/values.png')); ?>" alt="">
                    </div>
                    <div class="col-lg-8">
                        <h4 class="mb-1">Our Values</h4>
                        <p>Achievement,Challenge,Competency,Creativity
                            ,Honesty
                            ,Loyalty
                            ,Service
                            ,Success</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<div class="container">

    <h2 class="text-center">
        <strong>Instagram</strong>
    </h2>
    <div id="instafeed" style="display: flex; flex-Direction: row;"></div>



</div>






<br><br><br>



<footer id="footer">
    <div class="container">
        <h2 class="text-center">
            <strong style="color:black">Contact Us</strong>
        </h2>
        <div class="row">


            <div class="col-lg-4">
                <div class="contact-details">

                    <ul class="contact">
                        <li>
                            <p><i class="fa fa-map-marker"></i> <strong>Address:</strong> Salmiya, Salem al Mubarak
                                Street, Laila Gallery Complex, 1st Floor, Office 4</p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone"></i> <strong>Phone:</strong> (+965) 2205-4505</p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@turnkw.com" style="color:grey">info@turnkw.com</a></p>
                        </li>
                        <li>
                            <p><i class="fa fa-instagram"></i> <a href="https://www.instagram.com/turnkw" style="color:grey">TurnKw</a></p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>




</footer>













<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-en', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>