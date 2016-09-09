@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('common.side_bar')
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url('/roles/create') }}" class="btn btn-primary pull-right"><i
                                    class="fa fa-plus"></i>
                            Add</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">Show a Role</div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td>{{ $role->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ $role->display_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Permission(s)</td>
                                            <td>
                                                @if(count($permissions) > 0)
                                                    <ol>
                                                        @foreach($permissions as $permission)
                                                            <li>{{ $permission->display_name }}</li>
                                                        @endforeach
                                                    </ol>
                                                @else
                                                    Empty
                                                @endif
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <h4>Add</h4>
                                                        <form class="form-horizontal" method="post"
                                                              action="{{ action('RoleController@attachPermission') }}">
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="role_id" value="{{ $role->id }}">

                                                            <div class="form-group">
                                                                <label for="permission_id"
                                                                       class="col-sm-3 control-label">Role</label>
                                                                <div class="col-sm-9">
                                                                    <select name="permission_id" id="permission_id"
                                                                            class="form-control">
                                                                        @if(count($new_permissions) > 0)
                                                                            @foreach($new_permissions as $new_permission)
                                                                                <option value="{{ $new_permission->id }}">{{ $new_permission->display_name }}</option>
                                                                            @endforeach
                                                                        @else
                                                                            <option value="">Empty</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-9 col-sm-offset-3">
                                                                    <button type="submit" class="btn btn-primary">Assign
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
