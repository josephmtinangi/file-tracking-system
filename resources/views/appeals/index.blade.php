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
                        <a href="{{ url('/appeals/new') }}" class="btn btn-primary pull-right">New</a>
                    </div>
                    <br>
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Appeals</h3>
                            </div>
                            <div class="panel-body">
                                Panel content
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
