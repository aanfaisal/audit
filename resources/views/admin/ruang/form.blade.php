<div class="form-group {{ $errors->has('nm_ruang') ? 'has-error' : ''}}">
    {!! Form::label('nm_ruang', 'Nm Ruang', ['class' => 'col-md-4 control-label']) !!}
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
<div class="form-group {{ $errors->has('tot_dayapenerangan') ? 'has-error' : ''}}">
    {!! Form::label('tot_dayapenerangan', 'Tot Dayapenerangan', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tot_dayapenerangan', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tot_dayapenerangan', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tot_dayaac') ? 'has-error' : ''}}">
    {!! Form::label('tot_dayaac', 'Tot Dayaac', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tot_dayaac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tot_dayaac', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tot_dayalain') ? 'has-error' : ''}}">
    {!! Form::label('tot_dayalain', 'Tot Dayalain', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tot_dayalain', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tot_dayalain', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tot_dayamesin') ? 'has-error' : ''}}">
    {!! Form::label('tot_dayamesin', 'Tot Dayamesin', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tot_dayamesin', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tot_dayamesin', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('nilai_IKE') ? 'has-error' : ''}}">
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
