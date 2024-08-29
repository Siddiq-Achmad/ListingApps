@extends('layouts.master')
@section('title')
@lang('translation.respondents')
@endsection
@section('css')
<link href="https://cdn.datatables.net/2.1.4/css/dataTables.bootstrap5.css" rel="stylesheet" type="text/css" />
<!--datatable responsive css-->

<link href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.bootstrap5.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.bootstrap5.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Surveys
@endslot
@slot('title')
Respondents Survey
@endslot
@endcomponent

<div class="row">
    <div class="col-xxl-3 col-sm-6">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="fw-medium text-muted mb-0">Total Surveys</p>
                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="{{ $surveys->count() }}">0</span>
                        </h2>
                        <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                <i class="ri-arrow-up-line align-middle"></i> 17.32 %
                            </span> vs. previous month</p>
                    </div>
                    <div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                <i class="ri-ticket-2-line"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div> <!-- end card-->
    </div>
    <!--end col-->
    <div class="col-xxl-3 col-sm-6">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="fw-medium text-muted mb-0">Total Responsedents</p>
                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="{{ $respondents->count() }}">0</span></h2>
                        <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                <i class="ri-arrow-down-line align-middle"></i> 0.96 %
                            </span> vs. previous month</p>
                    </div>
                    <div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                <i class="mdi mdi-timer-sand"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-3 col-sm-6">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="fw-medium text-muted mb-0">Valid Answers</p>
                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="107">0</span>K</h2>
                        <p class="mb-0 text-muted"><span class="badge bg-light text-danger mb-0">
                                <i class="ri-arrow-down-line align-middle"></i> 3.87 %
                            </span> vs. previous month</p>
                    </div>
                    <div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                <i class="ri-shopping-bag-line"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div>
    <!--end col-->
    <div class="col-xxl-3 col-sm-6">
        <div class="card card-animate">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div>
                        <p class="fw-medium text-muted mb-0">Invalid Answers</p>
                        <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value" data-target="15.95">0</span>%</h2>
                        <p class="mb-0 text-muted"><span class="badge bg-light text-success mb-0">
                                <i class="ri-arrow-up-line align-middle"></i> 1.09 %
                            </span> vs. previous month</p>
                    </div>
                    <div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-primary-subtle text-primary rounded-circle fs-4">
                                <i class="ri-delete-bin-line"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- end card body -->
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Data Respondents</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="respondents-table" class="display table table-bordered dt-responsive nowrap align-middle mdl-data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Respondent Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>City</th>
                                <th>Education</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                           
                    </table>
                </div>
            </div>
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




<script src="{{ URL::asset('build/js/data/surveys/response.init.js') }}"></script>

<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
