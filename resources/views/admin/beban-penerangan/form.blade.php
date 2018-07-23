<div class="form-group {{ $errors->has('nm_ruang') ? 'has-error' : ''}}">
    {!! Form::label('nm_ruang', 'Nama Ruang', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nm_ruang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nm_ruang', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jns_lamp') ? 'has-error' : ''}}">
    {!! Form::label('jns_lamp', 'Jenis Lamp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jns_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jns_lamp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jml_lamp') ? 'has-error' : ''}}">
    {!! Form::label('jml_lamp', 'Jumlah Lampu', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jml_lamp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('daya_lamp') ? 'has-error' : ''}}">
    {!! Form::label('daya_lamp', 'Daya Lampu', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('daya_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('daya_lamp', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tot_pemakaian') ? 'has-error' : ''}}">
    {!! Form::label('tot_pemakaian', 'Total Pemakaian', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tot_pemakaian', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tot_pemakaian', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('wktu_pengukuran') ? 'has-error' : ''}}">
    {!! Form::label('wktu_pengukuran', 'Waktu Pengukuran', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('datetime-local', 'wktu_pengukuran', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('wktu_pengukuran', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Simpan', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
