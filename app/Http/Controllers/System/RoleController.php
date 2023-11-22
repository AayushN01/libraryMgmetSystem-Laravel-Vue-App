<?php

namespace App\Http\Controllers\System;

use App\Models\Config\Role;
use Spatie\Permission\Models\Permission;    
use App\Http\Requests\Role\RoleRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{   
    public function __construct(Role $role)
    {
        $this->role = $role;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $roles = $this->role->with('permissions')->orderBy('created_at','DESC')->get();
        return view('backend.system.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $permissions = Permission::get();
        $permission_groups = $permissions->groupBy('group_name') ->chunk(4);
         return view('backend.system.role.create',compact('permissions','permission_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {   

        $role = $this->role->create(['name'=>$request->name,
                                    'guard_name'=>'web']);

        $role->syncPermissions($request->input('permissions'));

        return redirect()->route('role.index')->with('success','Role has been created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $rolePermission = $role->permissions;
        $permissions = Permission::get();
        $permission_groups = $permissions->groupBy('group_name') ->chunk(4);
        return view('backend.system.role.edit',compact('role','rolePermission','permissions','permission_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->name = $request->name;
        $role->save();
        $role->syncPermissions($request->input('permissions'));
        return redirect()->route('role.index')->with('success','Role has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = $this->role->find($id);
        if($role){
            $role->delete();
            return redirect()->back()->with('success','Role has been deleted successfully');
        }
        return redirect()->back()->with('error','Role not found');

    }
}
