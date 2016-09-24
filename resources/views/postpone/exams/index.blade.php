@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="row">
            <!-- uncomment code for absolute positioning tweek see top comment in css -->
            <!-- <div class="absolute-wrapper"> </div> -->
            <!-- Menu -->

            @include('common.side_menu')

                    <!-- Main Content -->
            <div class="container">
                <div class="side-body">
                    <div class="row">
                        <br>
                        <a href="{{url('/postpone/exams/create')}}" class="btn btn-primary pull-right">New</a>
                    </div>
                    <br>
                    <div class="row">
                        <div class="panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">All Postponeds</h3>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table table-stripped">
                                <theader>
                                    <th>ID</th>
                                    <th> Exam type</th>
                                    <th> Course</th>
                                    <th> Reason</th>
                                    <th> Attachment</th>
                                </theader>
                                <tbody>

                                </tbody>

                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
