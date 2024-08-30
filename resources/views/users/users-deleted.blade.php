@extends('layouts.master')
@section('title')
    @lang('translation.users-deleted')
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
            Deleted Users
        @endslot
    @endcomponent
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
                            @forelse ($users as $user) 
                            <tr>
                                <th scope="row">
                                    <div class="form-check">
                                        <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                    </div>
                                </th>
                                <td>{{ $loop->iteration }}</td>
                                <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->detail ? $user->detail->phone : '' }}</td>
                                <td>{{ $user->detail ? $user->detail->city . ', ' . $user->detail->country : '' }}</td>
                                <td>{{ $user->detail ? $user->detail->company : '' }}</td>
                                <td><span class="badge bg-danger">Deleted</span></td>
                                <td><span class="badge bg-info-subtle text-info">{{ \Carbon\Carbon::parse($user->deleted_at)->diffForHumans() }}</span></td>
                                <td>
                                    <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><form action="{{ route('users.restore', $user->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item  btn btn-success btn-label waves-effect waves-light"> <i class="ri-lock-unlock-line label-icon align-middle fs-16 me-2"></i>Restore</button>
                                            </form>
                                            </li>
                                            <li>
                                                <form action="{{ route('users.forceDelete', $user->id) }}" method="POST">
                                                    @csrf
                                                <button type="submit" class="dropdown-item btn btn-danger btn-label waves-effect waves-light"><i class="ri-delete-bin-5-line label-icon align-middle fs-16 me-2"></i> Force Delete</button>
                                                </form>
                                            </li>
                                        </ul>
                                                
                                                
                                    </div>
                                    {{-- <div class="dropdown d-inline-block">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill align-middle"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                           
                                            <li><a class="dropdown-item restore-item-btn"><i class="ri-lock-unlock-line align-bottom me-2 text-muted"></i> Restore</a></li>
                                            <li>
                                                <a class="dropdown-item remove-item-btn">
                                                    <i class="ri-delete-bin-5-line align-bottom me-2 text-muted"></i> Force Delete
                                                </a>
                                            </li>
                                        </ul>
                                    </div> --}}
                                </td>
                            </tr>
                            @empty
                                
                            <tr>
                                <td colspan="10" class="text-center">No Data Users was deleted</td>
                            </tr>
                            @endforelse
                            
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
