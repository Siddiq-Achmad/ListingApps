<!doctype html >
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>
    <meta charset="utf-8" />
    <title><?php echo $__env->yieldContent('title'); ?> | LUXIMA - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Aceh Weddings Directory & Listing" name="description" />
    <meta content="Luxima.id" name="author" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('build/images/favicon.ico')); ?>">
    <?php echo $__env->make('layouts.head-css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<?php $__env->startSection('body'); ?>
    <?php echo $__env->make('layouts.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldSection(); ?>
    <!-- Begin page -->
    <div id="layout-wrapper">
        
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div>
            <div class="page-content">
                <div class="container">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            
        </div>
        <footer class="custom-footer bg-dark position-absolute bottom-0 w-100 p-2">
            <div class="row text-center text-sm-start align-items-center">
                <div class="col-sm-6">

                    <div>
                        <p class="copy-rights mb-0">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © <a href="https://luxima.id" target="_blank" class="text-reset">LUXIMA.ID</a>
                        </p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end mt-3 mt-sm-0">
                        <ul class="list-inline mb-0 footer-social-link">
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/luxima.photo/" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-facebook-fill"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.instagram.com/luxima.id" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-instagram-fill"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.youtube.com/@luxima-id" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-youtube-fill"></i>
                                    </div>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="https://wa.me/message/RKONP4YR4YJTE1" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-whatsapp-line"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://luxima-id.com" class="avatar-xs d-block">
                                    <div class="avatar-title rounded-circle">
                                        <i class="ri-global-line"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->


    <!-- JAVASCRIPT -->
    <?php echo $__env->make('layouts.vendor-scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/frontend/layouts/master-bootstrap.blade.php ENDPATH**/ ?>