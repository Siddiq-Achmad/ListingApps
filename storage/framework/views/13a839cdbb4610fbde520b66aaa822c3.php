<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.starter'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Pages <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Info  <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>

    <div class="card">

        <div class="card-body">
            <div class="d-flex align-items-start">
                <div class="flex-grow-1 align-self-center">
                    <h5 class="card-title mb-0">Welcome to LUXIMA.ID!</h5>
                </div>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset py-1 px-2" data-bs-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted fs-18"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">

                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="py-3">
                <p class="text-muted">This is your <b>Luxima</b> dashboard.</p>
            </div>

        </div>

        <div class="card-body">

            <h5 class="card-title mb-3">Client IP</h5>
            <ul>
                <?php $__currentLoopData = $clientIP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-2">
                            <i class="ri-checkbox-circle-line align-middle me-1 text-primary"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-13"><?php echo e($key); ?> : <?php echo e($value); ?></h5>
                        </div>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="card-body">

            <h5 class="card-title mb-3">Host Info</h5>
            <ul>
                <?php $__currentLoopData = $hostIP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-2">
                            <i class="ri-checkbox-circle-line align-middle me-1 text-primary"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-13"><?php echo e($key); ?> : <?php echo e($value); ?></h5>
                        </div>
                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

    </div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/info.blade.php ENDPATH**/ ?>