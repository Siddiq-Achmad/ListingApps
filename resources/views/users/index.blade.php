@extends('layouts.master')
@section('title')
    @lang('translation.users')
@endsection
@section('css')
<link href="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Management
        @endslot
        @slot('title')
            Users
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                        <div class="flex-grow-1">
                            <button class="btn btn-primary add-btn" data-bs-toggle="modal" data-bs-target="#showModal"><i
                                    class="ri-add-fill me-1 align-bottom"></i> Add Users</button>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="hstack text-nowrap gap-2">
                                <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i
                                        class="ri-delete-bin-2-line"></i></button>
                                <button class="btn btn-soft-primary"><i
                                        class="ri-filter-2-line me-1 align-bottom"></i> Filters</button>
                                <button class="btn btn-soft-success">Import</button>
                                <button type="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"
                                    class="btn btn-soft-danger"><i class="ri-more-2-fill"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                    <li><a class="dropdown-item" href="#">All</a></li>
                                    <li><a class="dropdown-item" href="#">Last Week</a></li>
                                    <li><a class="dropdown-item" href="#">Last Month</a></li>
                                    <li><a class="dropdown-item" href="#">Last Year</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="col-xxl-9">
            <div class="card" id="contactList">
                <div class="card-header">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="search-box">
                                <input type="text" class="form-control search" placeholder="Search for contact...">
                                <i class="ri-search-line search-icon"></i>
                            </div>
                        </div>
                        <div class="col-md-auto ms-auto">
                            <div class="d-flex align-items-center gap-2">
                                <span class="text-muted">Sort by: </span>
                                <select class="form-control mb-0" data-choices data-choices-search-false
                                    id="choices-single-default">
                                    <option value="Name">Name</option>
                                    <option value="Company">Company</option>
                                    <option value="Designation">Designation</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <div class="table-responsive table-card mb-3">
                            <table class="table align-middle table-nowrap mb-0" id="userTable">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    id="checkAll" value="option">
                                            </div>
                                        </th>
                                        <th class="sort" data-sort="name" scope="col">Name</th>
                                        <th class="sort" data-sort="company_name" scope="col">Company</th>
                                        <th class="sort" data-sort="email_id" scope="col">Email ID</th>
                                        <th class="sort" data-sort="phone" scope="col">Phone No</th>
                                        <th class="sort" data-sort="designation" scope="col">Designation</th>
                                        <th class="sort" data-sort="skill" scope="col">Skill</th>
                                        <th class="sort" data-sort="date" scope="col">Last Update</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    <tr >
                                        <th scope="row">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="chk_child"
                                                    value="option1">
                                            </div>
                                        </th>
                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#USR001</a>
                                        </td>
                                        <td class="name">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <img src="{{ auth()->user()->avatar != '' ? URL::asset('images/users/'. auth()->user()->avatar) : URL::asset('images/users/user-dummy-img.jpg') }}"
                                                        alt="" class="avatar-xs rounded-circle" >
                                                </div>
                                                <div class="flex-grow-1 ms-2 name">{{ auth()->user()->name }}</div>
                                            </div>
                                        </td>
                                        <td class="company_name">{{ auth()->user()->detail ? auth()->user()->detail->company : '-' }}</td>
                                        <td class="email_id">{{ auth()->user()->email }}</td>
                                        <td class="phone">{{ auth()->user()->detail ? auth()->user()->detail->phone : '-' }}</td>
                                        <td class="designation">{{ auth()->user()->detail ? auth()->user()->detail->designation : '-' }}</td>
                                        <td class="skills">
                                            <?php 
                                                $skills = explode(',', auth()->user()->detail ? auth()->user()->detail->skills : '-');
                                            ?>
                                            @foreach ($skills as $skill)
                                                <span class="badge bg-primary-subtle text-primary">{{ $skill }}</span>
                                            @endforeach
                                            
                                        </td>
                                        
                                        
                                        <td class="last_updated">{{ Carbon\Carbon::parse(auth()->user()->updated_at)->format('d M, Y') }} <small
                                                class="text-muted"> {{ Carbon\Carbon::parse(auth()->user()->updated_at)->format('h:i A') }}.</small></td>
                                        <td>
                                            <ul class="list-inline hstack gap-2 mb-0">
                                                <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                        <i class="ri-phone-line fs-16"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item edit" data-bs-toggle="tooltip"
                                                    data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                        <i class="ri-question-answer-line fs-16"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <div class="dropdown">
                                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item view-item-btn"
                                                                    href="javascript:void(0);"><i
                                                                        class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                    View</a></li>
                                                            <li><a class="dropdown-item edit-item-btn" href="#showModal"
                                                                    data-bs-toggle="modal"><i
                                                                        class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                    Edit</a></li>
                                                            <li>
                                                                <a class="dropdown-item remove-item-btn"
                                                                    data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i
                                                                        class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#25a0e2,secondary:#00bd9d" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ contacts We did not find any
                                        contacts for you search.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
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
                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content border-0">
                                <div class="modal-header bg-primary-subtle p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="close-modal"></button>
                                </div>
                                <form class="tablelist-form" autocomplete="off" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" id="id-field" />
                                        <div class="row g-3">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <div class="position-relative d-inline-block">
                                                        <div class="position-absolute  bottom-0 end-0">
                                                            <label for="user-image-input" class="mb-0"  data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                                <div class="avatar-xs cursor-pointer">
                                                                    <div class="avatar-title bg-light border rounded-circle text-muted">
                                                                        <i class="ri-image-fill"></i>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                            <input class="form-control d-none" name="avatar" value="" id="user-image-input" type="file"
                                                                accept="image/png, image/jpeg, image/jpg">
                                                        </div>
                                                        <div class="avatar-lg p-1">
                                                            <div class="avatar-title bg-light rounded-circle">
                                                                <img src="{{ URL::asset('images/users/user-dummy-img.jpg') }}"
                                                        alt="" id="user-img" class="avatar-md rounded-circle object-fit-cover" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <label for="name-field" class="form-label">Username</label>
                                                    <div class="form-icon right">
                                                    <input type="text" id="username-field" name="name" class="form-control form-control-icon" placeholder="Enter Username" required />
                                                    <i class="ri-user-3-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="email_id-field" class="form-label">Email</label>
                                                    <div class="form-icon right">
                                                        <input type="email" class="form-control form-control-icon" id="email_id-field" name="email" placeholder="example@gmail.com" required>
                                                        <i class="ri-mail-unread-line"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="password-field" class="form-label">Password</label>
                                                    <input type="password" name="password" id="password-field" class="form-control"
                                                        placeholder="Enter Password" required minlength="8" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="confirm-password-field" class="form-label">Confirm Password</label>
                                                    <input type="password" name="password_confirmation" id="c_password-field" class="form-control"
                                                        placeholder="Enter Password" required minlength="8" same="password" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="f_name-field" class="form-label">First
                                                        Name</label>
                                                    <input type="text" id="f_name-field" name="f_name" class="form-control"
                                                        placeholder="Enter First name"  />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="l_name-field" class="form-label">Last
                                                        Name</label>
                                                    <input type="text" id="l_name-field" name="l_name" class="form-control"
                                                        placeholder="Enter Last name"  />
                                                    
                                                </div>
                                            </div>
                                           
                                            
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="phone-field" class="form-label">Phone</label>
                                                    <input type="text" name="phone" id="phone-field" class="form-control"
                                                        placeholder="Enter phone no" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="dob-field" class="form-label">Date of Birth</label>
                                                    <input type="date" id="dob-field" name="dob" class="form-control"
                                                        placeholder="Enter Date of Birth"  />
                                                </div>
                                            </div>
                                            
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="address-field" class="form-label">Address</label>
                                                    <input type="text" id="address-field" name="address" class="form-control"
                                                        placeholder="Enter address"  />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="company_name-field" class="form-label">Company
                                                        Name</label>
                                                    <input type="text" id="company_name-field" name="company" class="form-control"
                                                        placeholder="Enter company name"  />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="designation-field"
                                                        class="form-label">Designation</label>
                                                    <input type="text" id="designation-field" name="designation" class="form-control"
                                                        placeholder="Enter Designation"  />
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-lg-12">
                                                <div>
                                                    <label for="skillinput-choices" class="form-label font-size-13 text-muted">Skills</label>
                                                    <select class="form-control" name="skills"
                                                        id="skillinput-choices"  multiple>
                                                        <option value="Network">Network</option>
                                                        <option value="Sales">Sales</option>
                                                        <option value="Support">Support</option>
                                                        <option value="Marketing">Marketing</option>
                                                        <option value="IT">IT</option>
                                                        <option value="Management">Management</option>
                                                        <option value="Photography">Photography</option>
                                                        <option value="Accounting">Accounting</option>
                                                        <option value="Finance">Finance</option>
                                                        <option value="HR">HR</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="add-btn">Add Contact</button>
                                            {{-- <button type="button" class="btn btn-primary" id="edit-btn">Update</button> --}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end add modal-->

                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close"
                                        id="btn-close"></button>
                                </div>
                                <div class="modal-body p-5 text-center">
                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                        colors="primary:#00bd9d,secondary:#25a0e2" style="width:90px;height:90px">
                                    </lord-icon>
                                    <div class="mt-4 text-center">
                                        <h4 class="fs-semibold">You are about to delete a contact ?</h4>
                                        <p class="text-muted fs-14 mb-4 pt-1">Deleting your contact will remove all of your
                                            information from our database.</p>
                                        <div class="hstack gap-2 justify-content-center remove">
                                            <button class="btn btn-link link-primary fw-medium text-decoration-none"
                                                data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i>
                                                Close</button>
                                        {{-- <form id="delete-record-form" method="POST">
                                            @csrf
                                            @method('DELETE') --}}
                                            <input type="hidden" id="_auth_id" name="_auth_id" value="{{ Auth::user()->id }}">
                                            {{-- <input type="hidden" id="_token_delete" name="_token_delete" value="{{ csrf_token() }}"> --}}
                                            <button class="btn btn-primary" id="delete-record">Yes, Delete It!!</button>
                                        {{-- </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end delete modal -->

                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-3">
            <div class="card" id="contact-view-detail">
                <div class="card-body text-center">
                    <div class="position-relative d-inline-block">
                        <img src="{{  auth()->user()->avatar != '' ? URL::asset('images/users/' . auth()->user()->avatar) :  URL::asset('images/users/user-dummy-img.jpg') }}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                        <span class="contact-active position-absolute rounded-circle bg-success"><span
                                class="visually-hidden"></span>
                    </div>
                    <h5 class="mt-4 mb-1">{{ Auth::user()->detail ? Auth::user()->detail->f_name ." ". Auth::user()->detail->l_name : Auth::user()->name }}</h5>
                    <p class="text-muted">{{ Auth::user()->email }}</p>

                    <ul class="list-inline mb-0">
                        <li class="list-inline-item avatar-xs">
                            <a href="tel:{{ Auth::user()->detail ? Auth::user()->detail->phone : '' }}" class="avatar-title bg-success-subtle text-success fs-15 rounded">
                                <i class="ri-phone-line"></i>
                            </a>
                        </li>
                        <li class="list-inline-item avatar-xs">
                            <a href="mailto:{{ Auth::user()->email }}" class="avatar-title bg-danger-subtle text-danger fs-15 rounded">
                                <i class="ri-mail-line"></i>
                            </a>
                        </li>
                        <li class="list-inline-item avatar-xs">
                            <a href="javascript:void(0);" class="avatar-title bg-primary-subtle text-primary fs-15 rounded">
                                <i class="ri-question-answer-line"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h6 class="text-muted text-uppercase fw-semibold mb-3">Personal Information</h6>
                    <p class="text-muted mb-4">{{ Auth::user()->detail ? Auth::user()->detail->biography : "Hello, I'm ". Auth::user()->name .", The most effective objective is one that is tailored
                        to the job you are applying for. It states what kind of career you are seeking, and what skills and
                        experiences." }} </p>
                    <div class="table-responsive table-card">
                        <table class="table table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td class="fw-medium" scope="row">Designation</td>
                                    <td>{{ Auth::user()->detail ? Auth::user()->detail->designation : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Full Name</td>
                                    <td>{{ Auth::user()->detail ? Auth::user()->detail->f_name ." ". Auth::user()->detail->l_name : Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Day of Birth</td>
                                    <td>{{ Auth::user()->detail ? \Carbon\Carbon::parse(Auth::user()->detail->dob)->format('d M, Y') : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Age</td>
                                    <td>{{ Auth::user()->detail ? \Carbon\Carbon::parse(Auth::user()->detail->dob)->age : '-' }} Years</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Address</td>
                                    <td>{{ Auth::user()->detail ? Auth::user()->detail->address : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium"></td>
                                    <td>{{ Auth::user()->detail ? Auth::user()->detail->city : '-' }}, {{ Auth::user()->detail ? Auth::user()->detail->country : '-' }}. {{ Auth::user()->detail ? Auth::user()->detail->zip : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Email ID</td>
                                    <td>{{ Auth::user()->email }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Phone No</td>
                                    <td>{{ Auth::user()->detail ? Auth::user()->detail->phone : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Website</td>
                                    <td>{{ Auth::user()->detail ? Auth::user()->detail->website : '-' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Skills</td>
                                    <td>
                                        @foreach (explode(',', Auth::user()->detail ? Auth::user()->detail->skills : '') as $skill)
                                            <span class="badge bg-secondary-subtle text-secondary">{{ $skill }}</span>
                                        @endforeach
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Created At</td>
                                    <td>{{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('d M, Y') }} <small class="text-muted">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->format('h:i A') }}.</small> | <span class="text-muted">{{ \Carbon\Carbon::parse(Auth::user()->created_at)->diffForHumans() }}</span></td>
                                </tr>
                                <tr>
                                    <td class="fw-medium" scope="row">Last Updated</td>
                                    <td>{{ \Carbon\Carbon::parse(Auth::user()->updated_at)->format('d M, Y') }} <small class="text-muted">{{ \Carbon\Carbon::parse(Auth::user()->updated_at)->format('h:i A') }}.</small> | <span class="text-muted">{{ \Carbon\Carbon::parse(Auth::user()->updated_at)->diffForHumans() }}</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
@endsection
@section('script')
@include('layouts.message')
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/list.pagination.js/list.pagination.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/data/users.init.js') }}"></script>
    <script src="{{ URL::asset('build/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
