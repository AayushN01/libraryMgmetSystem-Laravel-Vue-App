@extends('backend.layouts.app')
@section('title','Permissions')
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Add Permission</h4>

                <div class="page-title-right">
                    <a href="{{route('permission.index')}}" class="btn btn-secondary w-sm"> <i class="mdi mdi-arrow-left pr-2"></i>Back</a>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-body">
                    <form method="POST" action="{{route('permission.store')}}">        
                        @csrf
                        @include('backend.system.permission.partials.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection