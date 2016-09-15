@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <!-- <div class="absolute-wrapper"> </div> -->
            <!-- Menu -->

            @include('common.side_menu')

                    <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body">
                    <br>
                    <div class="row">
                        <a href="{{ url('permissions/create') }}" class="btn btn-primary pull-right">New</a>
                    </div>
                    <br>
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Your Permissions</h3>
                            </div>
                            <div class="panel-body">
                                @if(count($user_permissions) > 0)
                                    <table class="table table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Start</th>
                                            <th>End</th>
                                            <th>Reason</th>
                                            <th>Status</th>
                                            <th>Asked</th>
                                            <th>Updated</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user_permissions as $user_permission)
                                            <tr>
                                                <td>{{ $user_permission->id }}</td>
                                                <td>{{ $user_permission->start_date }}</td>
                                                <td>{{ $user_permission->end_date }}</td>
                                                <td>{{ str_limit($user_permission->reason, 20) }} <a href="{{ url('permissions/' . $user_permission->id) }}">Read more</a></td>
                                                <td>Pending...</td>
                                                <td>{{ $user_permission->created_at }}</td>
                                                <td>{{ $user_permission->updated_at }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @else
                                    <h2>Empty</h2>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection