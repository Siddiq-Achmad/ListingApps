<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->get('translation.respondents'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
<!--datatable responsive css-->
<link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.bootstrap5.css" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card mt-n4 mx-n4 mb-n5 border-0">
            <div class="bg-primary-subtle">
                <div class="card-body pb-4 mb-5">
                    <div class="row">
                        <div class="col-md">
                            <div class="row align-items-center">
                                <div class="col-md-auto">
                                    <div class="avatar-md mb-md-0 mb-4">
                                        <div class="avatar-title bg-white rounded-circle">
                                            <img src="<?php echo e(URL::asset('build/images/companies/img-4.png')); ?>" alt="" class="avatar-sm" />
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md">
                                    <h4 class="fw-semibold" id="ticket-title" >#<?php echo e($survey->id); ?> - <?php echo e($survey->title); ?></h4>
                                    <div class="hstack gap-3 flex-wrap">
                                        <div class="text-muted"><i class="ri-user-3-line align-bottom me-1"></i><span id="ticket-client"><?php echo e($survey->user->name); ?></span></div>
                                        <div class="vr"></div>
                                        <div class="text-muted">Create Date : <span class="fw-medium " id="create-date"><?php echo e(\Carbon\Carbon::parse($survey->created_at)->format('d M, Y')); ?></span></div>
                                        <div class="vr"></div>
                                        <div class="text-muted">Update Date : <span class="fw-medium" id="due-date"><?php echo e(\Carbon\Carbon::parse($survey->updated_at)->format('d M, Y')); ?></span></div>
                                        <div class="vr"></div>
                                        <div class="badge rounded-pill bg-primary fs-12" id="ticket-status">New</div>
                                        <div class="badge rounded-pill bg-success fs-12" id="ticket-priority">High</div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end col-->
                        <div class="col-md-auto mt-md-0 mt-4">
                            <div class="hstack gap-1 flex-wrap">
                                <button type="button" class="btn avatar-xs mt-n1 p-0 favourite-btn active">
                                    <span class="avatar-title bg-transparent fs-15">
                                        <i class="ri-star-fill"></i>
                                    </span>
                                </button>
                                <button type="button" class="btn py-0 fs-16 text-body" id="settingDropdown" data-bs-toggle="dropdown">
                                    <i class="ri-share-line"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="settingDropdown">
                                    <li><a class="dropdown-item" href="#"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ri-share-forward-fill align-bottom me-2 text-muted"></i> Share with</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                                  </ul>
                                <button type="button" class="btn py-0 fs-16 text-body">
                                    <i class="ri-flag-line"></i>
                                </button>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- end card body -->
            </div>
        </div><!-- end card -->
    </div><!-- end col -->
</div><!-- end row -->

<div class="row">
    <div class="col-xxl-9">
        <div class="card">
            <div class="card-body p-4">
                <h6 class="fw-semibold text-uppercase mb-3">Survey Description</h6>
                <p class="text-muted"><?php echo e($survey->description); ?>. <a href="javascript:void(0);" class="link-secondary text-decoration-underline">Example</a></p>
                <h6 class="fw-semibold text-uppercase mb-3">Requirements Criteria</h6>
                <ul class="text-muted vstack gap-2 mb-4">
                    <li>Pick a Dashboard Type</li>
                    <li>Categorize information when needed</li>
                    <li>Provide Context</li>
                    <li>On using colors</li>
                    <li>On using the right graphs</li>
                </ul>
                <div class="mt-4">
                    <h6 class="fw-semibold text-uppercase mb-3">Here is the code you've requested</h6>
                    <div>
                       
                    </div>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
        
        <div class="card">
            <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Survey Questions</h4>
                            <div class="flex-shrink-0">
                                <button type="button" class="btn btn-soft-primary btn-sm">
                                    <i class="ri-question-line align-middle"></i> Add Question
                                </button>
                            </div>
                        </div><!-- end card header -->
            <div class="card-body">
                <div class="table-responsive table-card">
                    <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                        <thead class="text-muted table-light">
                            <tr>
                                <th>#</th>
                                <th>Question</th>
                                <th>Type</th>
                                <th>Answer</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php $__empty_1 = true; $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?> 
                            <tr>
                                <td>
                                    <?php echo e($loop->iteration); ?>

                                </td>
                                <td>
                                    <a href="javascript:void(0);" class="fw-medium link-primary" data-bs-toggle="modal" data-bs-target="#zoomInModal-<?php echo e($question->id); ?>"><?php echo e($question->question_text); ?></a>
                                </td>
                                <td> <?php echo e($question->getTypes()); ?> </td>
                                
                                <td>
                                    <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($answer->question_id == $question->id): ?>
                                            <?php echo e($answer->answer); ?>

                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="javascript:void(0);" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#zoomInModal-<?php echo e($question->id); ?>"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn"  data-bs-toggle="modal" href="#deleteOrder">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            
                            <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body p-5 text-center">
                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#25a0e2,secondary:#00bd9d" style="width:90px;height:90px">
                                            </lord-icon>
                                            <div class="mt-4 text-center">
                                                <h4>Are you Sure ?</h4>
                                                <p class="text-muted fs-14 mb-4">Deleting Question will remove all data related to it. #<?php echo e($question->id); ?> </p>
                                                <div class="hstack gap-2 justify-content-center remove">
                                                    <form id="deleteForm-<?php echo e($question->id); ?>" action="#" method="POST">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('DELETE'); ?>
                                                    <button class="btn btn-link link-primary fw-medium text-decoration-none" data-bs-dismiss="modal" id="deleteRecord-close"><i class="ri-close-line me-1 align-middle"></i>
                                                        Close</button>
                                                    <button type="submit" class="btn btn-primary" id="delete-record">Yes, Delete It</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="zoomInModal-<?php echo e($question->id); ?>" class="modal fade zoomIn" tabindex="-1" aria-labelledby="zoomInModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    
                                    <div class="modal-content">
                                        <div class="modal-header p-3 bg-primary-subtle">
                                            <h5 class="modal-title" id="zoomInModalLabel">#<?php echo e($question->id); ?> Question Details</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="fs-16">
                                                <?php echo e($question->question_text); ?> 
                                            </h5>
                                           
                                            <p class="text-muted">Type : <?php echo e($question->getTypes()); ?></p>
                                            
                                            <p class="text-muted">Answer : <br>
                                                <?php $__currentLoopData = $answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($answer->question_id == $question->id): ?>
                                                        <?php echo e($answer->answer); ?>

                                                    <?php endif; ?>
                                                    
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </p>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            
                                        </div>

                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center">No data available</td>
                            </tr>
                                    
                            <?php endif; ?>
                                
                                
                            
                           
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div>
            </div>

            
            <!-- end card body -->
        </div><!--end card-->
        
    </div><!--end col-->
    <div class="col-xxl-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Respondent Details</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-borderless align-middle mb-0">
                        <tbody>
                            <tr>
                                <td class="fw-medium">Respondent ID</td>
                                <td>#<span id="r-no"><?php echo e($response->id); ?></span> </td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Respondent Name</td>
                                <td id="r-name"><?php echo e($response->name); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Respondent Email</td>
                                <td id="r-email"><?php echo e($response->email); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Respondent Phone</td>
                                <td id="r-phone"><?php echo e($response->phone); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Respondent Age</td>
                                <td id="r-age"><?php echo e($response->age); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Respondent Gender</td>
                                <td id="r-gender"><?php echo e($response->gender); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Respondent City</td>
                                <td id="r-city"><?php echo e($response->city); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Education Level</td>
                                <td id="r-education"><?php echo e($response->education_level); ?></td>
                            </tr>
                            
                            
                            <tr>
                                <td class="fw-medium">Create Date</td>
                                <td id="c-date"><?php echo e(\Carbon\Carbon::parse($response->created_at)->format('d M, Y h:i A')); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Update Date</td>
                                <td id="d-date"><?php echo e(\Carbon\Carbon::parse($response->updated_at)->format('d M, Y h:i A')); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Last Activity</td>
                                <td><?php echo e(\Carbon\Carbon::parse($response->updated_at)->diffForHumans()); ?></td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Labels</td>
                                <td class="hstack text-wrap gap-1">
                                    <span class="badge bg-secondary-subtle text-secondary">Respondent</span>
                                    
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                <h6 class="card-title fw-semibold mb-0">Answered Questions</h6>
                <h6 class="card-title fw-semibold mb-0 badge bg-primary"><?php echo e($answers->count()); ?></h6>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-borderless align-middle mb-0">
                        <tbody>
                            <tr>
                                <td class="fw-medium">Question : <span class="badge bg-secondary-subtle text-secondary pl-4"><?php echo e($questions->count()); ?></span></td>
                                <td class="fw-medium">Answer : <span class="badge bg-secondary-subtle text-secondary pl-4" ><?php echo e($answers->count()); ?></span></td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div><!--end card-body-->
            
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->



<div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-primary-subtle">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Edit Survey')); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
                <div class="modal-body">
                    <div class="row g-3">
                        
                        <div class="col-lg-12">
                            <div>
                                <label for="tasksTitle-field" class="form-label">Title</label>
                                <input type="text" id="tasksTitle-field" class="form-control" placeholder="Title" required />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label for="client_nameName-field" class="form-label">Client Name</label>
                                <input type="text" id="client_nameName-field" class="form-control" placeholder="Client Name" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <label for="assignedtoName-field" class="form-label">Assigned To</label>
                                <input type="text" id="assignedtoName-field" class="form-control" placeholder="Assigned to" required />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label for="date-field" class="form-label">Create Date</label>
                            <input type="text" id="date-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Create Date" required />
                        </div>
                        <div class="col-lg-6">
                            <label for="duedate-field" class="form-label">Due Date</label>
                            <input type="text" id="duedate-field" class="form-control" data-provider="flatpickr" data-date-format="d M, Y" placeholder="Due Date" required />
                        </div>
                        <div class="col-lg-6">
                            <label for="ticket-status" class="form-label">Status</label>
                            <select class="form-control" data-plugin="choices" name="ticket-status" id="ticket-status">
                                <option value="">Status</option>
                                <option value="New">New</option>
                                <option value="Inprogress">Inprogress</option>
                                <option value="Closed">Closed</option>
                                <option value="Open">Open</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="priority-field" class="form-label">Priority</label>
                            <select class="form-control" data-plugin="choices" name="priority-field" id="priority-field">
                                <option value="">Priority</option>
                                <option value="High">High</option>
                                <option value="Medium">Medium</option>
                                <option value="Low">Low</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Add Ticket</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.2/js/responsive.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.html5.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.js"></script>

    <script src="<?php echo e(URL::asset('build/js/pages/datatables.init.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('build/js/data/surveys/surveydetail.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('build/js/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/siddiq/Desktop/WEB DEV/LISTING/resources/views/surveys/survey-response.blade.php ENDPATH**/ ?>