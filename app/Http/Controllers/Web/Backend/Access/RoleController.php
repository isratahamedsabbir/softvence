<?php

namespace App\Http\Controllers\Web\Backend\Access;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return view('backend.layouts.access.roles.index', [
            'roles' => Role::all()
        ]);
    }

    public function create()
    {
        return view('backend.layouts.access.roles.create', [
            'permissions' => Permission::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'permissions' => 'required'
        ]);
        try {
            $role = Role::create(['name' => $request->name]);
            $role->syncPermissions($request->permissions);
            return redirect()->route('roles.index')->with('t-success', 'Role created t-successfully');
        } catch (Exception $exception) {
            return redirect()->back()->with('t-error', $exception->getMessage());
        }
    }

    public function edit($id)
    {
        return view('backend.layouts.access.roles.edit', [
            'role' => Role::find($id),
            'permissions' => Permission::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'permissions' => 'required'
        ]);
        try {
            $role = Role::find($id);
            $role->update(['name' => $request->name]);
            //must pass name not id
            $role->syncPermissions($request->permissions);
            return redirect()->route('roles.index')->with('t-success', 'Role updated t-successfully');
        } catch (Exception $exception) {
            return redirect()->back()->with('t-error', $exception->getMessage());
        }
    }

    public function show($id)
    {
        return view('backend.layouts.access.roles.edit', [
            'role' => Role::find($id),
            'permissions' => Permission::all()
        ]);
    }
    public function destroy($id)
    {
        try {
            $role = Role::find($id);
            $role->delete();
            return redirect()->back()->with('t-success', 'Role deleted t-successfully');
        } catch (Exception $exception) {
            return redirect()->back()->with('t-error', $exception->getMessage());
        }
    }
}