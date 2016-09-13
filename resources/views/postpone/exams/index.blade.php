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

                    <h1>Postpone Exam</h1>

                </div>
            </div>
        </div>

    </div>

@endsection
