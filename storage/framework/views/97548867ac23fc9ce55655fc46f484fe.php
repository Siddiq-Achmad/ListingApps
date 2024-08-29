<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

    <head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?> | LUXIMA - Admin & Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Aceh weddings Directory & Listing" name="description" />
    <meta content="Luxima.id" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('build/images/favicon.ico')); ?>">
        <?php echo $__env->make('layouts.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>

    <?php echo $__env->yieldContent('body'); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layouts.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/layouts/master-without-nav.blade.php ENDPATH**/ ?>