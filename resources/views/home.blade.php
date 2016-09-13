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

                    <h1> Main Content here </h1>

                    <div class="row">
                        <div class="col-sm-6">
                            {!! Form::open([]) !!}

                            <div class="form-group">
                                {!! Form::label('title', 'Title') !!}
                                {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description', 'Description') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                            </div>

                            {!! Form::submit('Pakia', ['class' => 'btn btn-primary']) !!}

                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection
