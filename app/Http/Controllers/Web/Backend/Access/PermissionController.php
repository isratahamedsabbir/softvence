<?php

namespace App\Http\Controllers\Web\Backend\Access;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        return view('backend.layouts.access.permissions.index', [
            'permissions' => Permission::all()
        ]);
    }
    public function create()
    {
        return view('backend.layouts.access.permissions.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name',
        ]);
        try{
            $permission = new Permission();
            $permission->name = $request->name;

            $permission->save();

            return redirect()->route('permissions.index')->with('t-success', 'Permission created t-successfully');
        }catch (\Exception $e){
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        return view('backend.layouts.access.permissions.edit', [
            'permission' => $permission
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:permissions,name,'.$id,
        ]);
        try{
            $permission = Permission::find($id);
            $permission->name = $request->name;
            $permission->save();
            return redirect()->back()->with('t-success', 'Permission updated t-successfully');
        }catch (\Exception $e){
            return redirect()->back()->with('t-error', $e->getMessage());
        }
    }
    public function show($id)
    {
        $permission = Permission::find($id);
        return view('backend.layouts.access.permissions.edit', [
            'permission' => $permission
        ]);
    }
    public function destroy($id)
    {
        $permission = Permission::find($id);
        if($permission->users->count() > 0){
            return redirect()->back()->with('t-error', 'Permission is in use');
        }
        $permission->delete();
        return redirect()->route('permissions.index')->with('t-success', 'Permission deleted t-successfully');
    }
}