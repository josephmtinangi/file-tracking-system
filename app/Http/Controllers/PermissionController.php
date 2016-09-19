<?php

namespace App\Http\Controllers;

<<<<<<< .merge_file_a09652
use App\Http\Requests\CreateUserPermissionRequest;
use App\User;
use App\UserPermission;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
=======
use App\Http\Requests\CreatePermissionRequest;
use App\Permission;
use Illuminate\Http\Request;

use App\Http\Requests;
>>>>>>> .merge_file_a08252

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< .merge_file_a09652
        $user_permissions = UserPermission::all();

        return view('permissions.index', compact('user_permissions'));
=======
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
>>>>>>> .merge_file_a08252
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
<<<<<<< .merge_file_a09652
     * @param CreateUserPermissionRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserPermissionRequest $request)
    {
        $path = $request->file('attachment')->store('permissions/attachments');

        UserPermission::create([
            'permission_title' => $request->input('permission_title'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'reason' => $request->input('reason'),
            'attachment' => $path,
            'user_id' => Auth::user()->id
        ]);

        flash()->success('Success');

=======
     * @param CreatePermissionRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePermissionRequest $request)
    {
        Permission::create([
            'name' => str_slug($request->input('name'), '-'),
            'display_name' => $request->input('display_name'),
            'description' => $request->input('description')
        ]);

>>>>>>> .merge_file_a08252
        return redirect('permissions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
<<<<<<< .merge_file_a09652
        $user_permission = UserPermission::findOrFail($id);

        return view('permissions.show', compact('user_permission'));
=======
        //
>>>>>>> .merge_file_a08252
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
<<<<<<< .merge_file_a09652
        $permission = $id;

        return view('permissions.edit', compact('permission'));
=======
        //
>>>>>>> .merge_file_a08252
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
}
