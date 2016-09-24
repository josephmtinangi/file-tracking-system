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
                                <h3 class="panel-title">Ask for Permission</h3>
                            </div>
                            <div class="panel-body">
                                {!! Form::open(['url' => 'permissions', 'class' => 'form-horizontal', 'files' => true]) !!}

                                @include('permissions._form')

                                <div class="form-group">
                                    <div class="col-sm-3 col-sm-offset-2">
                                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    </div>

@endsection