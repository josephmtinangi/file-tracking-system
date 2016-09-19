@extends('layouts.app')

@section('content')
<<<<<<< .merge_file_a03752

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
=======
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('common.side_bar')
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url('/roles') }}" class="btn btn-primary pull-right"><i
                                    class="fa fa-bolt"></i>
                            View All</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">Add a Permission</div>
                            <div class="panel-body">

                                @include('errors.list')

                                <form class="form-horizontal" method="post" action="{{ url('permissions') }}">

                                    {{ csrf_field() }}

                                    @include('permissions._form')

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
>>>>>>> .merge_file_a04248
