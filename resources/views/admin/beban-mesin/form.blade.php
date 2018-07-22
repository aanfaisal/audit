<div class="form-group {{ $errors->has('nm_ruang') ? 'has-error' : ''}}">
    {!! Form::label('nm_ruang', 'Nm Ruang', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nm_ruang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nm_ruang', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nm_mesin') ? 'has-error' : ''}}">
    {!! Form::label('nm_mesin', 'Nm Mesin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nm_mesin', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nm_mesin', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('daya_mesin') ? 'has-error' : ''}}">
    {!! Form::label('daya_mesin', 'Daya Mesin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('daya_mesin', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('daya_mesin', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tot_pemakaian') ? 'has-error' : ''}}">
    {!! Form::label('tot_pemakaian', 'Tot Pemakaian', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tot_pemakaian', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tot_pemakaian', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('wktu_pengukuran') ? 'has-error' : ''}}">
    {!! Form::label('wktu_pengukuran', 'Wktu Pengukuran', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('datetime-local', 'wktu_pengukuran', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('wktu_pengukuran', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tot_dayamesin') ? 'has-error' : ''}}">
    {!! Form::label('tot_dayamesin', 'Tot Dayamesin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tot_dayamesin', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tot_dayamesin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
