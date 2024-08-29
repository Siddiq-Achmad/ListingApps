<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.surveys'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>

    <link href="<?php echo e(URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('li_1'); ?>
            Surveys
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('title'); ?>
            Analytics
        <?php $__env->endSlot(); ?>
    <?php echo $__env->renderComponent(); ?>

    <div class="row">
        <div class="col-xxl-5">
            <div class="d-flex flex-column h-100">
                <div class="row h-100">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="alert alert-primary border-0 rounded-0 m-0 d-flex align-items-center"
                                    role="alert">
                                    <i data-feather="alert-triangle" class="text-primary me-2 icon-sm"></i>
                                    <div class="flex-grow-1 text-truncate">
                                        Your free trial expired in <b>17</b> days.
                                    </div>
                                    <div class="flex-shrink-0">
                                        <a href="pages-pricing"
                                            class="text-reset text-decoration-underline"><b>Upgrade</b></a>
                                    </div>
                                </div>

                                <div class="row align-items-end">
                                    <div class="col-sm-8">
                                        <div class="p-3">
                                            <p class="fs-16 lh-base">Upgrade your plan from a <span
                                                    class="fw-semibold">Free
                                                    trial</span>, to ‘Premium Plan’ <i class="mdi mdi-arrow-right"></i></p>
                                            <div class="mt-3">
                                                <a href="pages-pricing" class="btn btn-primary">Upgrade
                                                    Account!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="px-3">
                                            <img src="<?php echo e(URL::asset('build/images/user-illustarator-2.png')); ?>" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-body-->
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Users</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="28.05">0</span>k</h2>
                                        <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                                <i class="ri-arrow-up-line align-middle"></i> 16.24 %
                                            </span> vs. previous month</p>
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-primary-subtle rounded-circle fs-2">
                                                <i data-feather="users" class="text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Sessions</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="97.66">0</span>k</h2>
                                        <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                                <i class="ri-arrow-down-line align-middle"></i> 3.96 %
                                            </span> vs. previous month</p>
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-primary-subtle rounded-circle fs-2">
                                                <i data-feather="activity" class="text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Avg. Visit Duration</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="3">0</span>m
                                            <span class="counter-value" data-target="40">0</span>sec
                                        </h2>
                                        <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                                <i class="ri-arrow-down-line align-middle"></i> 0.24 %
                                            </span> vs. previous month</p>
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-primary-subtle rounded-circle fs-2">
                                                <i data-feather="clock" class="text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->

                    <div class="col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <p class="fw-medium text-muted mb-0">Bounce Rate</p>
                                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value"
                                                data-target="33.48">0</span>%</h2>
                                        <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                                <i class="ri-arrow-up-line align-middle"></i> 7.05 %
                                            </span> vs. previous month</p>
                                    </div>
                                    <div>
                                        <div class="avatar-sm flex-shrink-0">
                                            <span class="avatar-title bg-primary-subtle rounded-circle fs-2">
                                                <i data-feather="external-link" class="text-primary"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div> <!-- end row-->
            </div>
        </div> <!-- end col-->

        <div class="col-xxl-7">
            <div class="row h-100">
                <div class="col-xl-6">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Live Users By Country</h4>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-soft-primary btn-sm">
                                    Export Report
                                </button>
                            </div>
                        </div><!-- end card header -->

                        <!-- card body -->
                        <div class="card-body">

                            <div id="users-by-country" data-colors='["--vz-light"]' class="text-center"
                                style="height: 252px"></div>

                            <div class="table-responsive table-card mt-3">
                                <table
                                    class="table table-borderless table-sm table-centered align-middle table-nowrap mb-1">
                                    <thead
                                        class="text-muted border-dashed border border-start-0 border-end-0 bg-light-subtle">
                                        <tr>
                                            <th>Duration (Secs)</th>
                                            <th style="width: 30%;">Sessions</th>
                                            <th style="width: 30%;">Views</th>
                                        </tr>
                                    </thead>
                                    <tbody class="border-0">
                                        <tr>
                                            <td>0-30</td>
                                            <td>2,250</td>
                                            <td>4,250</td>
                                        </tr>
                                        <tr>
                                            <td>31-60</td>
                                            <td>1,501</td>
                                            <td>2,050</td>
                                        </tr>
                                        <tr>
                                            <td>61-120</td>
                                            <td>750</td>
                                            <td>1,600</td>
                                        </tr>
                                        <tr>
                                            <td>121-240</td>
                                            <td>540</td>
                                            <td>1,040</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-6">
                    <div class="card card-height-100">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Sessions by Countries</h4>
                            <div>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    ALL
                                </button>
                                <button type="button" class="btn btn-soft-primary btn-sm">
                                    1M
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    6M
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div>
                                <div id="countries_charts"
                                    data-colors='["--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary-rgb, 0.45", "--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary", "--vz-primary"]'
                                    class="apex-charts" dir="ltr"></div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div> <!-- end col-->

            </div> <!-- end row-->
        </div><!-- end col -->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-xl-12">
            <div class="card" id="surveyList">
                <div class="card-header border-bottom-dashed">
    
                    <div class="row g-4 align-items-center">
                        <div class="col-sm">
                            <div>
                                <h5 class="card-title mb-0">Survey List</h5>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex flex-wrap align-items-start gap-2">
                                <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                <button type="button" class="btn btn-primary add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#addModal"><i class="ri-add-line align-bottom me-1"></i> Add
                                    Survey</button>
                                <button type="button" class="btn btn-soft-success"><i class="ri-file-download-line align-bottom me-1"></i>
                                    Import</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card mb-1">
                            <table class="table align-middle" id="surveyTable">
                                <thead class="table-light text-muted">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </th>
    
                                        <th class="sort" data-sort="title">Survey Title</th>
                                        <th class="sort" data-sort="description">Description</th>
                                        <th class="sort" data-sort="user_id">Created By</th>
                                        <th class="sort" data-sort="created_at">Created At</th>
                                        <th class="sort" data-sort="status">Status</th>
                                        <th class="sort" data-sort="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    <?php $__empty_1 = true; $__currentLoopData = $surveys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $survey): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        
                                    <tr>
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="<?php echo e(route('surveys.show', $survey->id)); ?>" class="fw-medium link-primary">#SRV-<?php echo e($survey->id); ?></a></td>
                                        <td class="title"><a href="<?php echo e(route('surveys.show', $survey->id)); ?>" class="fw-medium link-primary"><?php echo e($survey->title); ?></a></td>
                                        <td class="description"><?php echo e($survey->description); ?></td>
                                        <td class="user_id"><?php echo e($survey->user->name); ?></td>
                                        <td class="created_at"><?php echo e(\Carbon\Carbon::parse($survey->created_at)->diffForHumans()); ?></td>
                                        
                                        <td class="status"><span class="badge <?php if($survey->status == 1): ?> bg-success-subtle text-success <?php else: ?> bg-danger <?php endif; ?> text-uppercase"><?php echo e($survey->status == 1 ? 'Active' : 'Block'); ?></span>
                                        </td>
                                        <td>
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Edit">
                                                    <a class="edit-btn" href="#editModal" data-bs-toggle="modal" data-id="<?php echo e($survey->id); ?>" class="text-primary d-inline-block edit-item-btn">
                                                        <i class="ri-pencil-fill fs-16"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">
                                                    <a class="text-danger d-inline-block remove-item-btn" data-id="<?php echo e($survey->id); ?>" data-bs-toggle="modal" href="#deleteRecordModal" data-bs-target="#deleteRecordModal">
                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="7" class="text-center py-3 text-secondary">No Surveys Found</td>
                                    </tr>
                                        
                                    <?php endif; ?>
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#25a0e2,secondary:#00bd9d" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ surveys
                                        We did not find any
                                        surveys for you search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="surveyModalLabel">Add Survey</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form id="addForm" action="<?php echo e(route('surveys.store')); ?>" method="POST" class="tablelist-form" autocomplete="off">
                                    <?php echo csrf_field(); ?>
                                    
                                    <div class="modal-body">
                                        <input type="hidden" id="id-field" name="id" />
    
                                        <div class="mb-3" id="modal-id" style="display: none;">
                                            <label for="id-field1" class="form-label">ID</label>
                                            <input type="text" id="id-field1" class="form-control" placeholder="ID"  readonly />
                                        </div>
    
                                        <div class="mb-3">
                                            <label for="surveytitle-field" class="form-label">Survey
                                                Title</label>
                                            <input type="text" id="surveytitle-field" name="title" class="form-control" placeholder="Enter Survey Title" required />
                                        </div>
    
                                        <div class="mb-3">
                                            <label for="description-field" class="form-label">Description</label>
                                            <textarea class="form-control" name="description" id="description-field" rows="3" placeholder="Enter Description"></textarea>
                                        </div>
    
                                        
    
                                        <div>
                                            <label for="status-field" class="form-label">Status</label>
                                            <select class="form-control" name="status" id="status-field">
                                                <option value="1">Active</option>
                                                <option value="0">Block</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="add-btn">Add Survey</button>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="esurveyModalLabel">Edit Survey</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form id="editForm" method="POST" action="#" class="tablelist-form" autocomplete="off" enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <div class="modal-body">
                                        <input type="hidden" id="id-field" name="id" />
    
                                        <div class="mb-3" id="modal-id" style="display: none;">
                                            <label for="id-field1" class="form-label">ID</label>
                                            <input type="text" id="id-field1" class="form-control"  placeholder="ID" readonly />
                                        </div>
    
                                        <div class="mb-3">
                                            <label for="esurveytitle-field" class="form-label">Survey
                                                Title</label>
                                            <input type="text" id="esurveytitle-field" class="form-control" name="title" placeholder="Enter Survey Title" required />
                                        </div>
    
                                        <div class="mb-3">
                                            <label for="edescription-field" class="form-label">Description</label>
                                            <textarea class="form-control" id="edescription-field" rows="3" name="description" placeholder="Enter Description"></textarea>
                                        </div>
    
                                        
    
                                        <div>
                                            <label for="estatus-field" class="form-label">Status</label>
                                            <select class="form-control" data-choices data-choices-search-false name="status" id="estatus-field" >
                                                <option value="1">Active</option>
                                                <option value="0">Block</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" id="edit-btn">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
    
                    <!-- Modal -->
                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mt-2 text-center">
                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#25a0e2,secondary:#00bd9d" style="width:100px;height:100px">
                                        </lord-icon>
                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                            <h4>Are you sure ?</h4>
                                            <p class="text-muted mx-4 mb-0">Are you sure you want to
                                                remove this record ? </p>
                                                
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                        <form id="deleteForm"  method="POST" >
                                        <?php echo method_field('DELETE'); ?>
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" id="id-item" name="id" />
                                        <button type="submit" class="btn w-sm btn-primary" id="delete-record">Yes, Delete
                                            It!</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end modal -->
                </div>
            </div>
        </div>
        <!-- end col -->

    </div>

    

    <div class="row">
        <div class="col-xl-4">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Users by Device</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Current Year</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <div id="user_device_pie_charts"
                        data-colors='["--vz-primary", "--vz-primary-rgb, 0.60", "--vz-primary-rgb, 0.75"]'
                        class="apex-charts" dir="ltr"></div>

                    <div class="table-responsive mt-3">
                        <table class="table table-borderless table-sm table-centered align-middle table-nowrap mb-0">
                            <tbody class="border-0">
                                <tr>
                                    <td>
                                        <h4 class="text-truncate fs-14 fs-medium mb-0"><i
                                                class="ri-stop-fill align-middle fs-18 text-primary me-2"></i>Desktop
                                            Users</h4>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-0"><i data-feather="users"
                                                class="me-2 icon-sm"></i>78.56k</p>
                                    </td>
                                    <td class="text-end">
                                        <p class="text-success fw-medium fs-12 mb-0"><i
                                                class="ri-arrow-up-s-fill fs-5 align-middle"></i>2.08%
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="text-truncate fs-14 fs-medium mb-0"><i
                                                class="ri-stop-fill align-middle fs-18 text-success me-2"></i>Mobile
                                            Users</h4>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-0"><i data-feather="users"
                                                class="me-2 icon-sm"></i>105.02k</p>
                                    </td>
                                    <td class="text-end">
                                        <p class="text-danger fw-medium fs-12 mb-0"><i
                                                class="ri-arrow-down-s-fill fs-5 align-middle"></i>10.52%
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h4 class="text-truncate fs-14 fs-medium mb-0"><i
                                                class="ri-stop-fill align-middle fs-18 text-primary me-2"></i>Tablet
                                            Users</h4>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-0"><i data-feather="users"
                                                class="me-2 icon-sm"></i>42.89k</p>
                                    </td>
                                    <td class="text-end">
                                        <p class="text-danger fw-medium fs-12 mb-0"><i
                                                class="ri-arrow-down-s-fill fs-5 align-middle"></i>7.36%
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4 col-md-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Top Referrals Pages</h4>
                    <div class="flex-shrink-0">
                        <button type="button" class="btn btn-soft-primary btn-sm">
                            Export Report
                        </button>
                    </div>
                </div>

                <div class="card-body">

                    <div class="row align-items-center">
                        <div class="col-6">
                            <h6 class="text-muted text-uppercase fw-semibold text-truncate fs-12 mb-3">
                                Total Referrals Page</h6>
                            <h4 class="fs- mb-0">725,800</h4>
                            <p class="mb-0 mt-2 text-muted"><span class="badge bg-success-subtle text-success mb-0">
                                    <i class="ri-arrow-up-line align-middle"></i> 15.72 %
                                </span> vs. previous month</p>
                        </div><!-- end col -->
                        <div class="col-6">
                            <div class="text-center">
                                <img src="<?php echo e(URL::asset('build/images/illustrator-1.png')); ?>" class="img-fluid" alt="">
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                    <div class="mt-3 pt-2">
                        <div class="progress progress-lg rounded-pill">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 18%" aria-valuenow="18"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 22%" aria-valuenow="22"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 16%" aria-valuenow="16"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 19%" aria-valuenow="19"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div><!-- end -->

                    <div class="mt-3 pt-2">
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <p class="text-truncate text-muted fs-14 mb-0"><i
                                        class="mdi mdi-circle align-middle text-primary me-2"></i>www.google.com
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                <p class="mb-0">24.58%</p>
                            </div>
                        </div><!-- end -->
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <p class="text-truncate text-muted fs-14 mb-0"><i
                                        class="mdi mdi-circle align-middle text-secondary me-2"></i>www.youtube.com
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                <p class="mb-0">17.51%</p>
                            </div>
                        </div><!-- end -->
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <p class="text-truncate text-muted fs-14 mb-0"><i
                                        class="mdi mdi-circle align-middle text-success me-2"></i>www.meta.com
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                <p class="mb-0">23.05%</p>
                            </div>
                        </div><!-- end -->
                        <div class="d-flex mb-2">
                            <div class="flex-grow-1">
                                <p class="text-truncate text-muted fs-14 mb-0"><i
                                        class="mdi mdi-circle align-middle text-warning me-2"></i>www.medium.com
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                <p class="mb-0">12.22%</p>
                            </div>
                        </div><!-- end -->
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <p class="text-truncate text-muted fs-14 mb-0"><i
                                        class="mdi mdi-circle align-middle text-danger me-2"></i>Other
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                <p class="mb-0">17.58%</p>
                            </div>
                        </div><!-- end -->
                    </div><!-- end -->

                    <div class="mt-2 text-center">
                        <a href="javascript:void(0);" class="text-muted text-decoration-underline">Show
                            All</a>
                    </div>

                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4 col-md-6">
            <div class="card card-height-100">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Top Pages</h4>
                    <div class="flex-shrink-0">
                        <div class="dropdown card-header-dropdown">
                            <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="text-muted fs-16"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Today</a>
                                <a class="dropdown-item" href="#">Last Week</a>
                                <a class="dropdown-item" href="#">Last Month</a>
                                <a class="dropdown-item" href="#">Current Year</a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
                            <thead class="text-muted table-light">
                                <tr>
                                    <th scope="col" style="width: 62;">Active Page</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Users</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="link-secondary">/themesbrand/skote-25867</a>
                                    </td>
                                    <td>99</td>
                                    <td>25.3%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="link-secondary">/dashonic/chat-24518</a>
                                    </td>
                                    <td>86</td>
                                    <td>22.7%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="link-secondary">/skote/timeline-27391</a>
                                    </td>
                                    <td>64</td>
                                    <td>18.7%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="link-secondary">/themesbrand/minia-26441</a>
                                    </td>
                                    <td>53</td>
                                    <td>14.2%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="link-secondary">/dashon/dashboard-29873</a>
                                    </td>
                                    <td>33</td>
                                    <td>12.6%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="link-secondary">/doot/chats-29964</a>
                                    </td>
                                    <td>20</td>
                                    <td>10.9%</td>
                                </tr><!-- end -->
                                <tr>
                                    <td>
                                        <a href="javascript:void(0);" class="link-secondary">/minton/pages-29739</a>
                                    </td>
                                    <td>10</td>
                                    <td>07.3%</td>
                                </tr><!-- end -->
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div><!-- end -->
                </div><!-- end cardbody -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

   


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<?php echo $__env->make('layouts.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        var deleteRecordModal = document.getElementById('deleteRecordModal');

        deleteRecordModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var dataId = button.getAttribute('data-id');
        var deleteForm = deleteRecordModal.querySelector('#deleteForm');
        var deleteItem = deleteRecordModal.querySelector('#id-item');
        var url = '<?php echo e(route('surveys.destroy', ':id')); ?>';
        url = url.replace(':id', dataId);

        // Ubah action dari form
        deleteItem.value = dataId;
        deleteForm.setAttribute('action', url);
        });


    
        const editBtn = document.querySelectorAll('.edit-btn');
        const editModal = document.getElementById('editModal');
        const editForm = document.getElementById('editForm');

        // Event listener untuk tombol Edit
        editBtn.forEach(button => {
            button.addEventListener('click', function() {
                const userId = this.getAttribute('data-id');
            

                
                // Mengambil data pengguna dari server
                fetch(`/surveys/${userId}/edit`)
                    .then(response => response.json())
                    .then(data => {
                        // Mengisi data ke dalam modal
                        document.getElementById('id-field').value = data.id;
                        document.getElementById('id-field1').value = data.id;
                        document.getElementById('esurveytitle-field').value = data.title;
                        document.getElementById('edescription-field').value = data.description;
                        document.getElementById('estatus-field').setAttribute('value', data.status);

                        
                        editForm.action = `<?php echo e(route('surveys.update', ':id')); ?>`;
                        editForm.action = editForm.action.replace(':id', userId);
                        
                        // Menampilkan modal
                        document.getElementById('editModal').style.display = 'block';
                    })
                    .catch(error => console.error('Error:', error));

                
            });

        });

        

        
        // // Event listener untuk menutup modal
        // document.getElementById('close-modal').addEventListener('click', function() {
        //     document.getElementById('editModal').style.display = 'none';
        // });

        
    });

       
    </script>
    
    <!-- apexcharts -->
    <script src="<?php echo e(URL::asset('build/libs/apexcharts/apexcharts.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/jsvectormap/maps/world-merc.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/libs/prismjs/prism.js')); ?>"></script>

    <!-- dashboard init -->
    <script src="<?php echo e(URL::asset('build/js/pages/dashboard-analytics.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/surveys/index.blade.php ENDPATH**/ ?>