@extends('frontend.layouts.master-bootstrap')
@section('title')
    @lang('translation.survey')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Forms
        @endslot
        @slot('title')
            Survey
        @endslot
    @endcomponent

    <div class="row">
        
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-between">
                    <h4 class="card-title mb-0 flex-grow-1">{{ $survey->title }}</h4> 
                    <h4 class="card-title mb-0 flex-shrink-0">#{{ $survey->id }}</h4>
                    </div>
                </div><!-- end card header -->
                <div class="card-body">
                    <form action="survey" class="form-steps" autocomplete="off">
                        <div class="text-center pt-3 pb-4 mb-1 d-flex justify-content-center">
                            <img src="{{ URL::asset('build/images/logo-dark.png') }}" class="card-logo card-logo-dark" alt="logo dark"
                                height="17">
                            <img src="{{ URL::asset('build/images/logo-light.png') }}" class="card-logo card-logo-light" alt="logo light"
                                height="17">
                        </div>
                        <div class="step-arrow-nav mb-4">

                            <ul class="nav nav-pills custom-nav nav-justified" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="steparrow-gen-info-tab" data-bs-toggle="pill"
                                        data-bs-target="#steparrow-gen-info" type="button" role="tab"
                                        aria-controls="steparrow-gen-info" aria-selected="true">Responder</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="steparrow-description-info-tab"
                                        data-bs-toggle="pill" data-bs-target="#steparrow-description-info" type="button"
                                        role="tab" aria-controls="steparrow-description-info"
                                        aria-selected="false">Questions</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-experience-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-experience" type="button" role="tab"
                                        aria-controls="pills-experience" aria-selected="false">Finish</button>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="steparrow-gen-info" role="tabpanel"
                                aria-labelledby="steparrow-gen-info-tab">
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="steparrow-gen-info-name-input">
                                                    Name <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="steparrow-gen-info-name-input" placeholder="Enter Name"
                                                    required>
                                                <div class="invalid-feedback">Please enter a full name</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="steparrow-gen-info-email-input">Email</label>
                                                <input type="email" class="form-control"
                                                    id="steparrow-gen-info-email-input" placeholder="Enter Email">
                                                <div class="invalid-feedback">Please enter an email address</div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="steparrow-gen-info-phone-input">Phone <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"
                                                    id="steparrow-gen-info-phone-input" placeholder="Enter Phone" minlength="10"
                                                    required>
                                                <div class="invalid-feedback">Please enter a phone number</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="steparrow-gen-info-age-input">Age</label>
                                                <input type="number" class="form-control"
                                                    id="steparrow-gen-info-age-input" placeholder="Enter Age">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="steparrow-gen-info-city-input">City</label>
                                                    <select class="form-select" id="steparrow-gen-info-city-input">
                                                        <option selected>Choose...</option>
                                                        <option value="Banda Aceh">Banda Aceh</option>
                                                        <option value="Aceh Barat">Aceh Barat</option>
                                                        <option value="Aceh Barat Daya">Aceh Barat Daya</option>
                                                        <option value="Aceh Besar">Aceh Besar</option>
                                                        <option value="Aceh Jaya">Aceh Jaya</option>
                                                        <option value="Aceh Selatan">Aceh Selatan</option>
                                                        <option value="Aceh Singkil">Aceh Singkil</option>
                                                        <option value="Aceh Tamiang">Aceh Tamiang</option>
                                                        <option value="Aceh Tenggara">Aceh Tenggara</option>
                                                        <option value="Aceh Tengah">Aceh Tengah</option>
                                                        <option value="Aceh Timur">Aceh Timur</option>
                                                        <option value="Aceh Utara">Aceh Utara</option>
                                                        <option value="Bireuen">Bireuen</option>
                                                        <option value="Gayo Lues">Gayo Lues</option>
                                                        <option value="Lhokseumawe">Lhokseumawe</option>
                                                        <option value="Pidie">Pidie</option>
                                                        <option value="Pidie Jaya">Pidie Jaya</option>
                                                        <option value="Sabang">Sabang</option>
                                                        <option value="Subulussalam">Subulussalam</option>
                                                        <option value="Langsa">Langsa</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"
                                                    for="steparrow-gen-info-education-input">Education Level</label>
                                                    <select class="form-select" id="steparrow-gen-info-education-input">
                                                        <option selected>Choose...</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="S1">S1</option>
                                                        <option value="S2">S2</option>
                                                        <option value="S3">S3</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                            </div>
                                        </div>


                                    </div>
                                    
                                </div>
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                        data-nexttab="steparrow-description-info-tab"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to more
                                        info</button>
                                </div>
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane fade" id="steparrow-description-info" role="tabpanel"
                                aria-labelledby="steparrow-description-info-tab">
                                <div class="mb-3">
                                    @foreach($survey->questions as $question)
                                        {!! $question->renderQuestionField() !!}
                                    @endforeach
                
                                    

                                </div>
                                <div class="d-flex align-items-start gap-3 mt-4">
                                    <button type="button" class="btn btn-light btn-label previestab"
                                        data-previous="steparrow-gen-info-tab"><i
                                            class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i> Back to
                                        General</button>
                                    <button type="button" class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                        data-nexttab="pills-experience-tab"><i
                                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Submit</button>
                                </div>
                            </div>
                            <!-- end tab pane -->

                            <div class="tab-pane fade" id="pills-experience" role="tabpanel">
                                <div class="text-center p-4">

                                    {{-- <div class="avatar-md mt-5 mb-4 mx-auto">
                                        <div class="avatar-title bg-light text-success display-4 rounded-circle">
                                            <i class="ri-checkbox-circle-fill"></i>
                                        </div>
                                    </div> --}}
                                    <div class="mb-4 p-4">
                                        <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop"
                                            colors="primary:#0ab39c,secondary:#405189"
                                            style="width:120px;height:120px"></lord-icon>
                                    </div>
                                    <h5>Thank you, Well Done !</h5>
                                    <p class="text-muted">Terima Kasih atas partisipasi anda dalam mengisi Kuesioner Survei Ini, <br> Kami berharap data yang anda masukkan bermanfaat untuk kami dalam mengembangkan program kami. </p>
                                </div>
                            </div>
                            <!-- end tab pane -->
                        </div>
                        <!-- end tab content -->
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div><!-- end row -->
    
@endsection
@section('script')
    <script src="{{ URL::asset('build/js/pages/form-wizard.init.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
