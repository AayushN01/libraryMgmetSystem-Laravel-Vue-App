@extends('backend.layouts.app')
@section('title','Category')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Book Categories</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">List of all Categories
                        <a href="{{ route('category.create') }}" class="btn btn-primary" style="float:right;">Add New</a>
                    </div>

                    <div class="card-body">
                        <category-table-component></category-table-component>
                    </div>
                </div>
            </div>
        </div>

        <!-- end page title -->
    </div> <!-- container-fluid -->
@endsection
