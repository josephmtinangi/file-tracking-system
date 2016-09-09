<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Permission;
use App\Role;
use Illuminate\Http\Request;

use App\Http\Requests;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRoleRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRoleRequest $request)
    {
        Role::create([
            'name' => str_slug($request->input('name'), '-'),
            'display_name' => $request->input('display_name'),
            'description' => $request->input('description')
        ]);

        return redirect('roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::getRolePermissions($role->id);
        $new_permissions = Permission::getNewPermissions($role->id);
        return view('roles.show', compact('role', 'permissions', 'new_permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('roles.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function attachPermission(Request $request)
    {
        $role = Role::findOrFail($request->input('role_id'));
        $permission = Permission::findOrFail($request->input('permission_id'));

        $role->attachPermission($permission);

        return redirect('roles');
    }

}
