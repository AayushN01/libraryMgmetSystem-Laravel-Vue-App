<?php

namespace App\Http\Controllers\System;

use App\Models\Config\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Permission\PermissionRequest;

class PermissionController extends Controller
{   
    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $permissions = $this->permission->get();
        return view('backend.system.permission.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.system.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $request)
    {
        $input = [
            'name'=>$request->name,
            'group_name'=>$request->group_name,
            'guard_name'=>'web',
        ];

       $this->permission->create($input);

       return redirect()->route('permission.index')->with('success','Permission has been added successfully.');
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
    public function edit(Permission $permission)
    {
        return view('backend.system.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $permission->name = $request->name;
        $permission->group_name = $request->group_name;
        $permission->save();
        return redirect()->route('permission.index')->with('success','Permission has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = $this->permission->findOrFail($id);
        $permission->delete();
        return redirect()->route('permission.index')->with('success','Permission has been deleted successfully.');
    }
}
