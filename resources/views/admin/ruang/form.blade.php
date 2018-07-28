<div class="form-group {{ $errors->has('nm_ruang') ? 'has-error' : ''}}">
    {!! Form::label('nm_ruang', 'Nama Ruang', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nm_ruang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nm_ruang', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('luas_ruang') ? 'has-error' : ''}}">
    {!! Form::label('luas_ruang', 'Luas Ruang', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('luas_ruang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('luas_ruang', '<p class="help-block">:message</p>') !!}
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
<div class="form-group {{ $errors->has('nmbebanac') ? 'has-error' : ''}}">
    {!! Form::label('nmbebanac', 'Nama Beban AC', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nmbebanac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nmbebanac', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jml_ac') ? 'has-error' : ''}}">
    {!! Form::label('jml_ac', 'Jumlah AC', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_ac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jml_ac', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('daya_ac') ? 'has-error' : ''}}">
    {!! Form::label('daya_ac', 'Daya AC', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('daya_ac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('daya_ac', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jnsbebanlain') ? 'has-error' : ''}}">
    {!! Form::label('jnsbebanlain', 'Jenis Beban Lain', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jnsbebanlain', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jnsbebanlain', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jmlbebanlain') ? 'has-error' : ''}}">
    {!! Form::label('jmlbebanlain', 'Jumlah Beban Lain', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jmlbebanlain', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jmlbebanlain', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('dyabebanlain') ? 'has-error' : ''}}">
    {!! Form::label('dyabebanlain', 'Daya Beban Lain', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dyabebanlain', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('dyabebanlain', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nm_mesin') ? 'has-error' : ''}}">
    {!! Form::label('nm_mesin', 'Nama Mesin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nm_mesin', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nm_mesin', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jml_mesin') ? 'has-error' : ''}}">
    {!! Form::label('jml_mesin', 'Jumlah Mesin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_mesin', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jml_mesin', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('daya_mesin') ? 'has-error' : ''}}">
    {!! Form::label('daya_mesin', 'Daya Mesin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('daya_mesin', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('daya_mesin', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
