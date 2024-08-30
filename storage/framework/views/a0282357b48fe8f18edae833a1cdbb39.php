<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.users-deleted'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Management
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Deleted Users
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Users Trashed</h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10px;">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                    </div>
                                </th>
                                <th data-ordering="false">No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Location</th>
                                <th>Company</th>
                                <th>Status</th>
                                <th>Deleted At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><a href="<?php echo e(route('users.show', $user->id)); ?>"><?php echo e($user->name); ?></a></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->detail ? $user->detail->phone : ''); ?></td>
                                <td><?php echo e($user->detail ? $user->detail->city . ', ' . $user->detail->country : ''); ?></td>
                                <td><?php echo e($user->detail ? $user->detail->company : ''); ?></td>
                                <td><span class="badge bg-danger">Deleted</span></td>
                                <td><span class="badge bg-info-subtle text-info"><?php echo e(\Carbon\Carbon::parse($user->deleted_at)->diffForHumans()); ?></span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><form action="<?php echo e(route('users.restore', $user->id)); ?>" method="POST">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="dropdown-item  btn btn-success btn-label waves-effect waves-light"> <i class="ri-lock-unlock-line label-icon align-middle fs-16 me-2"></i>Restore</button>
                                            </form>
                                            </li>
                                            <li>
                                                <form action="<?php echo e(route('users.forceDelete', $user->id)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                <button type="submit" class="dropdown-item btn btn-danger btn-label waves-effect waves-light"><i class="ri-delete-bin-5-line label-icon align-middle fs-16 me-2"></i> Force Delete</button>
                                                </form>
                                            </li>
                                        </ul>
                                                
                                                
                                    </div>
                                    
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                
                            <tr>
                                <td colspan="10" class="text-center">No Data Users was deleted</td>
                            </tr>
                            <?php endif; ?>
                            
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php echo $__env->make('layouts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <script src="<?php echo e(URL::asset('build/libs/list.js/list.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/list.pagination.js/list.pagination.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/data/users.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/users/users-deleted.blade.php ENDPATH**/ ?>