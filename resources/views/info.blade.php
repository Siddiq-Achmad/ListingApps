@extends('layouts.master')
@section('title') @lang('translation.starter')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Pages @endslot
@slot('title') Info  @endslot
@endcomponent

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
                @foreach ($clientIP as $key => $value)
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-2">
                            <i class="ri-checkbox-circle-line align-middle me-1 text-primary"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-13">{{ $key }} : {{ $value }}</h5>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="card-body">

            <h5 class="card-title mb-3">Host Info</h5>
            <ul>
                @foreach ($hostIP as $key => $value)
                <li class="list-group-item">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0 me-2">
                            <i class="ri-checkbox-circle-line align-middle me-1 text-primary"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="fs-13">{{ $key }} : {{ $value }}</h5>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

    </div>

@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection


