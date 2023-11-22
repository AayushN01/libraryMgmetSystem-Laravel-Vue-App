@extends('backend.layouts.app')
@section('title','Permissions')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('permission.create') }}" class="btn btn-primary w-sm"
                                    style="float: right;">Add New</a>
                            </div>
                            @if(Illuminate\Support\Facades\Session::has('success'))
                            <div class="toast fade show bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-toggle="toast" style="margin-left: auto;
                            margin-top: 10px;">
                                <div class="toast-body text-white">
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    {{Illuminate\Support\Facades\Session::get('success')}}
                                </div>
                            </div> <!--end toast-->    
                            @endif
                        </div>
                        <h4 class="card-title mb-3">All Permissions</h4>

                        <div class="row my-2">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="datatable2" class="table border-0">
                                        <thead>
                                            <tr class="">
                                                <th>#</th>
                                                <th>Permission</th>
                                                <th>Group</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($permissions as $key => $permission)
                                                <tr>
                                                    <th>{{ ++$key }}</th>
                                                    <td>{{ $permission->name }}</td>
                                                    <td>{{ $permission->group_name }}</td>
                                                    <td>
                                                        <a href="{{route('permission.edit',$permission->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                                        <a href="{{route('permission.destroy',$permission->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
@endsection
