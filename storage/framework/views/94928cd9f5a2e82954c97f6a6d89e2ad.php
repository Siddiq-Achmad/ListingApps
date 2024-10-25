<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', 'LUXIMA.ID'); ?> | Listing & Directory | LUXIMA.ID</title>

    

    <?php echo $__env->make('frontend.partials.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">

</head>
<body>
    <!-- Your UIkit based template HTML goes here -->
    <div id="spinner" class="uk-container " >
        <div uk-spinner>
        </div>
        <progress id="js-progressbar" class="uk-progress" value="0" max="100"></progress>
    </div>

    <div id="app" class="page_wrapper">


        <?php echo $__env->make('frontend.partials.header-app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        

    

        <!-- Page Outer -->
        <div class="page-outer">

        <!--Page Inner -->
        <div id="page-inner" class="page-inner">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!--Page Inner -->

            <?php echo $__env->make('frontend.partials.modals', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('frontend.components.cookies', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('frontend.components.backtop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            

        </div>
        <!-- Page Outer -->
            <?php echo $__env->make('frontend.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    

    

    <?php echo $__env->make('frontend.partials.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>
</html>
<?php /**PATH C:\Users\Ricky\Herd\ListingApps\resources\views/frontend/layouts/app.blade.php ENDPATH**/ ?>