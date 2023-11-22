
<div class="row mb-2">
    <div class="col-md-12 col-12">
        <div class="form-group ">
            <label for="name" class="col-form-label pt-0">Permission Name <span class="text text-danger">*</span></label>
            <div class="">
                <input class="form-control" type="text" id="name" name="name" placeholder="create-user" value="{{old('name',isset($permission->name)?$permission->name:'')}}">
            </div>
            @error('name')
                <span class="text text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-12 col-12">
        <div class="form-group ">
            <label for="name" class="col-form-label pt-0">Group Name <span class="text text-danger">*</span></label>
            <div class="">
                <input class="form-control" type="text" id="group_name" name="group_name" placeholder="User" value="{{old('group_name',isset($permission->group_name)?$permission->group_name:'')}}">
            </div>
            @error('group_name')
                <span class="text text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary w-sm">Save</button>