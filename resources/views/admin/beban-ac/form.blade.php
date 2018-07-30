<div class="form-group {{ $errors->has('nm_ruang') ? 'has-error' : ''}}">
    <label for="nm_ruang" class="col-md-4 control-label">Nama Ruang</label>
    <div class="col-md-6">
        {!! Form::select('nm_ruang', $ruang,null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('nm_ruang', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('jml_ac') ? 'has-error' : ''}}">
    <label for="jml_ac" class="col-md-4 control-label">Jumlah AC</label>
    <div class="col-md-6">
        {!! Form::text('jml_ac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('jml_ac', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('daya_ac') ? 'has-error' : ''}}">
    <label for="daya_ac" class="col-md-4 control-label">Daya AC</label>
    <div class="col-md-6">
        {!! Form::text('daya_ac', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('daya_ac', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('tot_pemakaian') ? 'has-error' : ''}}">
    <label for="tot_pemakaian" class="col-md-4 control-label">Total Pemakaian</label>
    <div class="col-md-6">
        {!! Form::text('tot_pemakaian', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('tot_pemakaian', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('wktu_pengukuran') ? 'has-error' : ''}}">
    <label for="wktu_pengukuran" class="col-md-4 control-label">Waktu Pengukuran</label>
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
