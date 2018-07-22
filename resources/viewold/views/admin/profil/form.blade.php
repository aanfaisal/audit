<div class="form-group {{ $errors->has('nama_institusi') ? 'has-error' : ''}}">
    {!! Form::label('nama_institusi', 'Nama Institusi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama_institusi', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nama_institusi', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    {!! Form::label('alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('alamat', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('p_gedung') ? 'has-error' : ''}}">
    {!! Form::label('p_gedung', 'Nama Gedung', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('p_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('p_gedung', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('jml_lantai') ? 'has-error' : ''}}">
    {!! Form::label('jml_lantai', 'Jumlah Lantai', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_lantai', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jml_lantai', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jml_gedung') ? 'has-error' : ''}}">
    {!! Form::label('jml_gedung', 'Jumlah Gedung di Institusi', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jml_gedung', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jml_meter') ? 'has-error' : ''}}">
    {!! Form::label('jml_meter', 'Jumlah Meter', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_meter', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jml_meter', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('meter_id') ? 'has-error' : ''}}">
    {!! Form::label('meter_id', 'Meter ID', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('meter_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('meter_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tot_daya') ? 'has-error' : ''}}">
    {!! Form::label('tot_daya', 'Total Daya', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tot_daya', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tot_daya', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pnjng_gedung') ? 'has-error' : ''}}">
    {!! Form::label('pnjng_gedung', 'Panjang Gedung', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pnjng_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('pnjng_gedung', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('lbr_gedung') ? 'has-error' : ''}}">
    {!! Form::label('lbr_gedung', 'Lebar Gedung', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('lbr_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('lbr_gedung', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tinggi_gedung') ? 'has-error' : ''}}">
    {!! Form::label('tinggi_gedung', 'Tinggi Gedung', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tinggi_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tinggi_gedung', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('luas_gedung') ? 'has-error' : ''}}">
    {!! Form::label('luas_gedung', 'Luas Gedung', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('luas_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('luas_gedung', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Simpan', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
