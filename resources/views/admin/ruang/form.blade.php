<div class="form-group {{ $errors->has('nm_ruang') ? 'has-error' : ''}}">
    {!! Form::label('nm_ruang', 'Nm Ruang', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nm_ruang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nm_ruang', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('luas_ruang') ? 'has-error' : ''}}">
    {!! Form::label('luas_ruang', 'Luas Ruang', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('luas_ruang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('luas_ruang', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jns_lamp') ? 'has-error' : ''}}">
    {!! Form::label('jns_lamp', 'Jns Lamp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jns_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jns_lamp', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jml_lamp') ? 'has-error' : ''}}">
    {!! Form::label('jml_lamp', 'Jml Lamp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jml_lamp', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('daya_lamp') ? 'has-error' : ''}}">
    {!! Form::label('daya_lamp', 'Daya Lamp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('daya_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('daya_lamp', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nmbebanac') ? 'has-error' : ''}}">
    {!! Form::label('nmbebanac', 'Nmbebanac', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nmbebanac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nmbebanac', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jml_ac') ? 'has-error' : ''}}">
    {!! Form::label('jml_ac', 'Jml Ac', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jml_ac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jml_ac', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('daya_ac') ? 'has-error' : ''}}">
    {!! Form::label('daya_ac', 'Daya Ac', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('daya_ac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('daya_ac', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jnsbebanlain') ? 'has-error' : ''}}">
    {!! Form::label('jnsbebanlain', 'Jnsbebanlain', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jnsbebanlain', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jnsbebanlain', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('jmlbebanlain') ? 'has-error' : ''}}">
    {!! Form::label('jmlbebanlain', 'Jmlbebanlain', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('jmlbebanlain', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jmlbebanlain', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dyabebanlain') ? 'has-error' : ''}}">
    {!! Form::label('dyabebanlain', 'Dyabebanlain', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('dyabebanlain', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('dyabebanlain', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nilai_IKE') ? 'has-error' : ''}}">
    {!! Form::label('nilai_IKE', 'Nilai Ike', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nilai_IKE', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nilai_IKE', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
