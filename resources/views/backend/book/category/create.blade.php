@extends('backend.layouts.app')
@section('title','Category')

@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Add a New Category</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('category.index')}}" class="btn btn-primary" style="float:right;">All Categories</a>
                    </div>

                    <div class="card-body">
                        <add-category-component></add-category-component>
                    </div>
                </div>
            </div>
        </div>

        <!-- end page title -->
    </div> <!-- container-fluid -->
@endsection
@push('scripts')
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script>
    $(document).ready(function(){
        $('#featuredImage').filemanager('image');
    });
</script>

@endpush
