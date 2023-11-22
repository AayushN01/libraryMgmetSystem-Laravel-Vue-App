@extends('backend.layouts.app')
@section('title','Settings')
@section('content')
<div class="container-fluid">
    <!-- start page title -->

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Settings</h4>
            </div>
        </div>
    </div>
    @if(session('message'))
        <h4 class="alert alert-warning">{{session('message')}}</h4>
    @endif
    <form action="{{route('settings.save')}}" method="POST" enctype="multipart/form-data" id="settingForm">
        @csrf
        <div class="card">
            <div class="row">
                <div class="col-md-4" style="border-right: 2px solid rgba(0, 0, 0, 0.479);">
                    <div class="card-header bg-white">
                        <h4 class="text-center">General Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Site title</label>
                            <input type="text" class="form-control" name="website_name" placeholder="Website Name" required value="{{old('setting',isset($setting->website_name)?$setting->website_name : '')}}">
                            @error('website_name')
                                <span class="text text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" placeholder="Description">{{old('description',isset($setting->description)?$setting->description : '')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact 1</label>
                            <input type="tel" class="form-control" name="contact_1" placeholder="Contact number" value="{{old('contact_1',isset($setting->contact_1)?$setting->contact_1 : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact 2</label>

                            <input type="tel" class="form-control" name="contact_2" placeholder="Contact number (Alternate)" value="{{old('contact_2',isset($setting->contact_2)?$setting->contact_2 : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email',isset($setting->email)?$setting->email : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="po_box">P.o> Box</label>
                            <input type="text" class="form-control" name="po_box" placeholder="P.O. Box" {{old('po_box',isset($setting->po_box)?$setting->po_box : '')}}>
                        </div>
                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="url" class="form-control" name="url" placeholder="https:://www.example.com" {{old('url',isset($setting->url)?$setting->url : '')}}>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="border-right: 2px solid rgba(0, 0, 0, 0.479);">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-header bg-white">
                                <h4 class="text-center">Logo & Favicon</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" class="form-control" name="logo" required>
                                    @if($setting)
                                        <img src="{{asset('uploads/settings/logo')}}/{{$setting->logo}}" alt="" width="50" height="50">
                                    @endif
                                    @error('logo')
                                    <span class="text text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="favicon">Favicon</label>
                                    <input type="file" class="form-control" name="favicon">
                                    @if($setting)
                                    <img src="{{asset('uploads/settings/favicon')}}/{{$setting->favicon}}" alt="" width="50" height="50">
                                @endif
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="card-header bg-white">
                        <h4 class="text-center">Social Settings</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="social">Facebook</label>
                            <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="{{old('facebook',isset($setting->facebook)?$setting->facebook : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="social">Instagram</label>
                            <input type="text" class="form-control" name="instagram" placeholder="Instagram" value="{{old('instagram',isset($setting->instagram)?$setting->instagram : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="social">Twitter</label>
                            <input type="text" class="form-control" name="twitter" placeholder="Twitter" value="{{old('twitter',isset($setting->twitter)?$setting->twitter : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="social">Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" placeholder="Linkedin" value="{{old('linkedin',isset($setting->linkedin)?$setting->linkedin : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="social">Google Plus</label>
                            <input type="text" class="form-control" name="google_plus" placeholder="Google Plus" value="{{old('google_plus',isset($setting->google_plus)?$setting->google_plus : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="social">Youtube</label>
                            <input type="text" class="form-control" name="youtube" placeholder="Youtube" value="{{old('youtube',isset($setting->youtube)?$setting->youtube : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="social">Tiktok</label>
                            <input type="text" class="form-control" name="tiktok" placeholder="Tiktok" value="{{old('tiktok',isset($setting->tiktok)?$setting->tiktok : '')}}">
                        </div>
                        <div class="form-group">
                            <label for="social">Google Map</label>
                            <textarea name="google_map" class="form-control" id="google_map" placeholder="Google map link">{{old('google_map',isset($setting->google_map)?$setting->google_map : '')}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-sm">Save</button>
                </div>
            </div>
        </div>
    </form>
    <!-- end page title -->
</div> <!-- container-fluid -->
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
<script>
    $(document).ready(function(){
        $('#settingForm').validate();
    });
</script>
@endpush