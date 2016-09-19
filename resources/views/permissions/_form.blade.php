<div class="form-group{{ $errors->has('permission_type') ? ' has-error' : '' }}">
    {!! Form::label('permission_type', 'Permission Type', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        <select name="permission_title" id="permission_title" class="form-control">
            <option value="">-Select-</option>
            <option value="">Type 1</option>
            <option value="">Type 2</option>
            <option value="">Type 3</option>
            <option value="">Type 4</option>
        </select>
    </div>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            @if ($errors->has('permission_type'))
                <span class="help-block">
                                            <strong>{{ $errors->first('permission_type') }}</strong>
                                        </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group{{ $errors->has('start_date') ? ' has-error' : '' }}">
    {!! Form::label('start_date', 'Start Date', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
    </div>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            @if ($errors->has('start_date'))
                <span class="help-block">
                                            <strong>{{ $errors->first('start_date') }}</strong>
                                        </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group{{ $errors->has('end_date') ? ' has-error' : '' }}">
    {!! Form::label('end_date', 'End Date', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
    </div>
    <div class="row">
        <div class="col-sm-offset-2 col-sm-10">
            @if ($errors->has('end_date'))
                <span class="help-block">
                                        <strong>{{ $errors->first('end_date') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('reason', 'Reasons (Optional)', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::textarea('reason', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('attachment', 'Attachment (Optional)', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::file('attachment') !!}
    </div>
</div>