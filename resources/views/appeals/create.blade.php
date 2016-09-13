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
                                <h3 class="panel-title">New Appeal</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        {!! Form::open([]) !!}
                                        <div class="form-group">
                                            {!! Form::label('no_of_courses', 'How many courses?') !!}
                                            {!! Form::select('no_of_courses', ['1' => '1', '2' => '2'], null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('course', 'Course 1') !!}
                                            {!! Form::text('course', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('course', 'Course 2') !!}
                                            {!! Form::text('course', null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('academic_year', 'Academic Year') !!}
                                            {!! Form::select('academic_year', ['1' => '2013-2014', '2' => '2014-2015'], null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="form-group">
                                            {!! Form::label('reason', 'Reason') !!}
                                            {!! Form::textarea('reason', null, ['class' => 'form-control']) !!}
                                        </div>
                                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
