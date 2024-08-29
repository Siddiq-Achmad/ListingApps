<?php $__env->startSection('title', '404'); ?>

<?php $__env->startSection('styles'); ?>
    <!-- Additional styles for this page -->
    <style>
        /* Custom styles specific to this page */
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('banner'); ?>
    <img src="<?php echo e(asset('assets/images/banner/21.jpg')); ?>" alt="" uk-cover>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>


 <!-- MAIN CONTENT -->
 <div class="page-content">
    <!-- isi content disini -->
        <div class="uk-section-default">
            <div class="uk-section uk-background-cover uk-background-primary uk-overflow-hidden uk-light uk-flex" style="background-image: url(<?php echo e(asset('assets/images/404.jpg')); ?>); height:80vh"
             uk-parallax="bgy: -500; saturate: 200;" uk-height-viewport="offset-top: true;" >

            <h1 class="uk-heading-xlarge uk-margin-auto uk-margin-auto-vertical">404</h1>

            <div class="uk-margin-auto uk-margin-auto-vertical">
                <h3 class="uk-heading-small uk-text-muted uk-text-center">PAGE NOT FOUND</h3>

                <p class="uk-text-center">The page you are looking for was moved, removed, renamed or might never existed.</p>
                <div class="uk-margin uk-text-center">
                <a class="uk-button uk-button-default uk-button-large uk-margin-small-top uk-margin-small-bottom" href="<?php echo e(route('index')); ?>">Back to Home</a>
            </div>

            </div>
            </div>
        </div>
    <!-- akhir konten -->
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('modals'); ?>
    <?php echo $__env->make('frontend.partials.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/frontend/errors/404.blade.php ENDPATH**/ ?>