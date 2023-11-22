
<div class="row mb-2">
    <div class="col-md-12 col-12">
        <div class="form-group ">
            <label for="name" class="col-form-label pt-0">Role Name <span class="text text-danger">*</span></label>
            <div class="">
                <input class="form-control" type="text" id="name" name="name" placeholder="Admin" value="{{old('name',isset($role->name)?$role->name : '')}}">
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
            <label for="permissions" class="col-form-label pt-0">Permissions<span class="text text-danger">*</span></label>
            <div class="">
                <select class="select2 mb-3 select2-multiple" style="width: 100%" multiple="multiple" data-placeholder="Choose" name="permissions[]">
                    @foreach ($permission_groups as $chunk)
                        @foreach($chunk as $title => $group)
                            <optgroup label="{{$title}}">
                                @foreach ($group as $permission)
                                <option value="{{$permission->id}}" @if(isset($role)) @if($role->permissions()->whereName($permission->name)->first()) selected @endif @endif>{{$permission->name}}</option>
                                @endforeach
                            </optgroup>
                        @endforeach
                    @endforeach
                </select> 
            </div>
            @error('permissions')
                <span class="text text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary w-sm">Save</button>