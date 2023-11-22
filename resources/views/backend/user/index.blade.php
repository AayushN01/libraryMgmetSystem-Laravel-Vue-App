@extends('backend.layouts.app')
@section('title','Users')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="#" class="btn btn-primary btn-sm" style="float: right;">Add New</a>
                            </div>
                        </div>
                        <h5 class="card-title">All Users</h5>
                        <div class="table-responsive">
                            <table id="datatable2" class="table border-0">
                                <thead>
                                <tr class="">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>           
                    </div>
                </div>
            </div>
        </div><!--end row-->
    </div>
@endsection