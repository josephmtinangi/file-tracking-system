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
                        <a href="{{ url('permissions') }}" class="btn btn-primary pull-right">All</a>
                    </div>
                    <br>
                    <div class="row">
                        <div class="panel panel-default">
                        	<div class="panel-heading">
                        		<h3 class="panel-title">{{ str_limit($user_permission->reason, 20) }}</h3>
                        	</div>
                        	<div class="panel-body">
                                <div class="table-responsive">
                                	<table class="table table-bordered">
                                		<tbody>
                                			<tr>
                                				<td>Start Date</td>
                                				<td>{{ $user_permission->start_date }}</td>
                                			</tr>
                                			<tr>
                                				<td>End Date</td>
                                				<td>{{ $user_permission->end_date }}</td>
                                			</tr>
                                			<tr>
                                				<td>Reason</td>
                                				<td>
                                                    <p>
                                                        {{ $user_permission->reason }}
                                                    </p>
                                                </td>
                                			</tr>
                                			<tr>
                                				<td>Attachment</td>
                                				<td>{{ $user_permission->attachment }}</td>
                                			</tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>Pending</td>
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
