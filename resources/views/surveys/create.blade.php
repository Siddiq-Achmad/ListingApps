@extends('layouts.master')
@section('title') @lang('translation.starter')  @endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1') Create @endslot
@slot('title') Surveys  @endslot
@endcomponent
@endsection
@section('script')
<script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
