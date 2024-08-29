@extends('layouts.master')
@section('title')
    @lang('translation.survey')
@endsection
@section('css')
<link href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
<!--datatable responsive css-->
<link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.bootstrap5.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')

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
                                            <img src="{{ URL::asset('build/images/companies/img-4.png') }}" alt="" class="avatar-sm" />
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-md">
                                    <h4 class="fw-semibold" id="survey-title" data-survey-id="{{ $survey->id }}" >#{{ $survey->id }} - {{ $survey->title }}</h4>
                                    <div class="hstack gap-3 flex-wrap">
                                        <div class="text-muted"><i class="ri-user-3-line align-bottom me-1"></i><span id="survey-user">{{ $survey->user->name }}</span></div>
                                        <div class="vr"></div>
                                        <div class="text-muted">Create Date : <span class="fw-medium " id="create-date">{{ \Carbon\Carbon::parse($survey->created_at)->format('d M, Y') }}</span></div>
                                        <div class="vr"></div>
                                        <div class="text-muted">Update Date : <span class="fw-medium" id="due-date">{{ \Carbon\Carbon::parse($survey->updated_at)->format('d M, Y') }}</span></div>
                                        <div class="vr"></div>
                                        <div class="badge rounded-pill bg-primary fs-12" id="survey-status">New</div>
                                        <div class="badge rounded-pill bg-success fs-12" id="survey-priority">High</div>
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
                <p class="text-muted">{{ $survey->description }}. <a href="javascript:void(0);" class="link-secondary text-decoration-underline">Example</a></p>
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
        
        
        <div class="card" id="questionsList">
            <div class="card-header border-0">
                <div class="d-flex align-items-center">
                    <h5 class="card-title mb-0 flex-grow-1">Questions</h5>
                    <div class="flex-shrink-0">
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn btn-primary add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Create Questions</button>
                            <button class="btn btn-soft-secondary" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body border border-dashed border-end-0 border-start-0">
                <form>
                    <div class="row g-3">
                        <div class="col-xxl-12 col-sm-12">
                            <div class="search-box">
                                <input type="text" class="form-control search bg-light border-light" placeholder="Search for question details or something...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <!--end col-->

                        {{-- <div class="col-xxl-3 col-sm-4">
                            <input type="text" class="form-control bg-light border-light" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" id="demo-datepicker" placeholder="Select date range">
                        </div> --}}
                        <!--end col-->

                        {{-- <div class="col-xxl-3 col-sm-4">
                            <div class="input-light">
                                <select class="form-control" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                    <option value="">Status</option>
                                    <option value="all" selected>All</option>
                                    <option value="Open">Open</option>
                                    <option value="Inprogress">Inprogress</option>
                                    <option value="Closed">Closed</option>
                                    <option value="New">New</option>
                                </select>
                            </div>
                        </div> --}}
                        <!--end col-->
                        {{-- <div class="col-xxl-1 col-sm-4">
                            <button type="button" class="btn btn-primary w-100" onclick="SearchData();"> <i class="ri-equalizer-fill me-1 align-bottom"></i>
                                Sear
                            </button>
                        </div> --}}
                        <!--end col-->
                    </div>
                    <!--end row-->
                </form>
            </div>
            <!--end card-body-->
            <div class="card-body">
                <div class="table-responsive table-card mb-4">
                    <table class="table align-middle table-nowrap mb-0" id="questionTable">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 40px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                    </div>
                                </th>
                                <th class="sort" data-sort="id">ID</th>
                                <th class="sort" data-sort="question_text">Question</th>
                                <th class="sort" data-sort="question_type">Type</th>
                                <th class="sort" data-sort="options">Options</th>
                                <th class="sort" data-sort="create_at">Create Date</th>

                                <th class="sort" data-sort="action">Action</th>
                            </tr>
                        </thead>
                        <tbody class="list form-check-all" id="question-list-data">
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td class="id"><a href="javascript:void(0);" onclick="ViewQuestions(this)" data-id="001" class="fw-medium link-primary">#LXM001</a></td>
                                <td class="question_text">Error message when placing an orders?</td>
                                <td class="question_type">Multiple Choice</td>
                                <td class="options">A, B, C, D, E</td>
                                <td class="create_at">08 Dec, 2021</td>

                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><button class="dropdown-item view-item-btn" data-bs-toggle="modal" href="#showModal"><i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                    View</button></li>
                                            <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                    Edit</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteOrder">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="noresult" style="display: none">
                        <div class="text-center">
                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#25a0e2,secondary:#00bd9d" style="width:75px;height:75px">
                            </lord-icon>
                            <h5 class="mt-2">Sorry! No Result Found</h5>
                            <p class="text-muted mb-0">We've searched more than 150+ Questions We did not find any
                                Questions for you search.</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-2">
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

                <!-- Modal -->
                <div class="modal fade flip" id="deleteOrder" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body p-5 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#25a0e2,secondary:#00bd9d" style="width:90px;height:90px">
                                </lord-icon>
                                <div class="mt-4 text-center">
                                    <h4>You are about to delete a order ?</h4>
                                    <p class="text-muted fs-14 mb-4">Deleting your order will remove all of
                                        your information from our database.</p>
                                    <div class="hstack gap-2 justify-content-center remove">
                                        <button class="btn btn-link link-primary fw-medium text-decoration-none" data-bs-dismiss="modal" id="deleteRecord-close"><i class="ri-close-line me-1 align-middle"></i>
                                            Close</button>
                                        <button class="btn btn-primary" id="delete-record">Yes, Delete It</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end modal -->
            </div>
            <!--end card-body-->
        </div>
        <!--end card-->
    </div><!--end col-->
    <div class="col-xxl-3">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Survey Details</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table table-borderless align-middle mb-0">
                        <tbody>
                            <tr>
                                <td class="fw-medium">Survey ID</td>
                                <td>#<span id="t-no">{{ $survey->id }}</span> </td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Create By</td>
                                <td id="t-client">{{ $survey->user->name }}</td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Survey</td>
                                <td>{{ $survey->title }}</td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Assigned To:</td>
                                <td>
                                    <div class="avatar-group">
                                        <a href="javascript:void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" data-bs-original-title="Erica Kernan">
                                            <img src="{{ URL::asset('build/images/users/avatar-4.jpg') }}" alt="" class="rounded-circle avatar-xs" />
                                        </a>
                                        <a href="javascript:void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" data-bs-original-title="Alexis Clarke">
                                            <img src="{{ URL::asset('build/images/users/avatar-10.jpg') }}" alt="" class="rounded-circle avatar-xs" />
                                        </a>
                                        <a href="javascript:void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" data-bs-original-title="James Price">
                                            <img src="{{ URL::asset('build/images/users/avatar-3.jpg') }}" alt="" class="rounded-circle avatar-xs" />
                                        </a>
                                        <a href="javascript: void(0);" class="avatar-group-item" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" data-bs-original-title="Add Members">
                                            <div class="avatar-xs">
                                                <div class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary">
                                                    +
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Status:</td>
                                <td>
                                    <select class="form-select" id="t-status" data-choices data-choices-search-false aria-label="Default select example">
                                        <option value>Status</option>
                                        <option value="1" selected>Active</option>
                                        <option value="0">InActive</option>
                                        
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Priority</td>
                                <td>
                                    <span class="badge bg-success" id="t-priority">High</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Create Date</td>
                                <td id="c-date">{{ \Carbon\Carbon::parse($survey->created_at)->format('d M, Y') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Update Date</td>
                                <td id="d-date">{{ \Carbon\Carbon::parse($survey->updated_at)->format('d M, Y') }}</td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Last Activity</td>
                                <td>{{ \Carbon\Carbon::parse($survey->updated_at)->diffForHumans() }}</td>
                            </tr>
                            <tr>
                                <td class="fw-medium">Labels</td>
                                <td class="hstack text-wrap gap-1">
                                    <span class="badge bg-secondary-subtle text-secondary">Admin</span>
                                    <span class="badge bg-secondary-subtle text-secondary">UI</span>
                                    <span class="badge bg-secondary-subtle text-secondary">Dashboard</span>
                                    <span class="badge bg-secondary-subtle text-secondary">Design</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div><!--end card-body-->
        </div><!--end card-->
        <div class="card">
            <div class="card-header">
                <h6 class="card-title fw-semibold mb-0">Files Attachment</h6>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center border border-dashed p-2 rounded">
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-light rounded">
                            <i class="ri-file-zip-line fs-20 text-primary"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1"><a href="javascript:void(0);" class="link-secondary">Velzon-admin.zip</a></h6>
                        <small class="text-muted">3.2 MB</small>
                    </div>
                    <div class="hstack gap-3 fs-16">
                        <a href="javascript:void(0);" class="text-muted"><i class="ri-download-2-line"></i></a>
                        <a href="javascript:void(0);" class="text-muted"><i class="ri-delete-bin-line"></i></a>
                    </div>
                </div>
                <div class="d-flex  align-items-center border border-dashed p-2 rounded mt-2">
                    <div class="flex-shrink-0 avatar-sm">
                        <div class="avatar-title bg-light rounded">
                            <i class="ri-file-ppt-2-line fs-20 text-primary"></i>
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <h6 class="mb-1"><a href="javascript:void(0);" class="link-secondary">Velzon-admin.ppt</a></h6>
                        <small class="text-muted">4.5 MB</small>
                    </div>
                    <div class="hstack gap-3 fs-16">
                        <a href="javascript:void(0);" class="text-muted"><i class="ri-download-2-line"></i></a>
                        <a href="javascript:void(0);" class="text-muted"><i class="ri-delete-bin-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end col-->
</div><!--end row-->




{{-- MODAL EDIT --}}
<div class="modal fade zoomIn" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content border-0">
            <div class="modal-header p-3 bg-primary-subtle">
                <h5 class="modal-title" id="exampleModalLabel">Add Question</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="tablelist-form" autocomplete="off">
                <div class="modal-body">
                    <div class="row g-3">
                        <input type="hidden" id="questionId" name="id" />
                        <div class="col-lg-12">
                            <div>
                                <label for="question-field" class="form-label">Question</label>
                                <input type="text" id="question-field" class="form-control" placeholder="Question" name="question" required />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label for="type-field" class="form-label">Type</label>
                                <select class="form-control select2" id="type-field" name="type">
                                    <option value="0">Text</option>
                                    <option value="1">Select</option>
                                    <option value="2">Radio</option>
                                    <option value="3">Checkbox</option>
                                    <option value="4">Date</option>
                                    <option value="5">DateTime</option>
                                    <option value="6">Time</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label for="options-field" class="form-label">Options</label>
                                <input type="text" id="options-field" class="form-control" placeholder="Options Separated By Commas eg: 1, 2, 3" name="options" />
                            </div>
                        </div>
                       
                    </div>

                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success" id="add-btn">Add Question</button>
                        {{-- <button type="button" class="btn btn-primary" id="edit-btn">Update</button> --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')
@include('layouts.message')

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

    <script src="{{ URL::asset('build/js/pages/datatables.init.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/data/surveys/surveydetail.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
