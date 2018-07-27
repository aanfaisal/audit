@extends('layouts.admin.main')

@section('title')
    Data Profil Gedung
@endsection

@section('maincontent')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Profil Gedung</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Profil Gedung</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                    {!! Form::model($profil, [
                        'method' => 'PATCH',
                        'url' => ['/manage/profil', $profil->profil_id],
                        'class' => 'form-horizontal',
                        'files' => true
                    ]) !!}

                    <!-- Smart Wizard -->
                    <p></p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                Step 1<br />
                                <small></small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                Step 2<br />
                                <small></small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                Step 3<br />
                                <small></small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                Step 4<br />
                                <small></small>
                            </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
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
                            {!! Form::label('p_gedung', 'Nama Gedung', ['class' => 'col-md-4 control-label']) !!}<strong></strong>
                            <div class="col-md-6">
                                {!! Form::text('p_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('p_gedung', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                      </div>

                      <div id="step-2">
                        <div class="form-group {{ $errors->has('jml_lantai') ? 'has-error' : ''}}">
                            {!! Form::label('jml_lantai', 'Jumlah Lantai', ['class' => 'col-md-4 control-label']) !!}<strong>Lantai</strong>
                            <div class="col-md-6">
                                {!! Form::text('jml_lantai', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('jml_lantai', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('jml_gedung') ? 'has-error' : ''}}">
                            {!! Form::label('jml_gedung', 'Jumlah Gedung di Institusi', ['class' => 'col-md-4 control-label']) !!}<strong></strong>
                            <div class="col-md-6">
                                {!! Form::text('jml_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('jml_gedung', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('jml_meter') ? 'has-error' : ''}}">
                            {!! Form::label('jml_meter', 'Jumlah Meter', ['class' => 'col-md-4 control-label']) !!}<strong>Buah</strong>
                            <div class="col-md-6">
                                {!! Form::text('jml_meter', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('jml_meter', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                      </div>
                      <div id="step-3">
                        <div class="form-group {{ $errors->has('meter_id') ? 'has-error' : ''}}">
                            {!! Form::label('meter_id', 'Meter ID', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('meter_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('meter_id', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('tot_daya') ? 'has-error' : ''}}">
                            {!! Form::label('tot_daya', 'Total Daya', ['class' => 'col-md-4 control-label']) !!}<strong>Kilo Watt</strong>
                            <div class="col-md-6">
                                {!! Form::text('tot_daya', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('tot_daya', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                      </div>
                      <div id="step-4">
                       <div class="form-group {{ $errors->has('pnjng_gedung') ? 'has-error' : ''}}">
                        {!! Form::label('pnjng_gedung', 'Panjang Gedung', ['class' => 'col-md-4 control-label']) !!}<strong>Meter</strong>
                        <div class="col-md-6">
                            {!! Form::text('pnjng_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                            {!! $errors->first('pnjng_gedung', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('lbr_gedung') ? 'has-error' : ''}}">
                        {!! Form::label('lbr_gedung', 'Lebar Gedung', ['class' => 'col-md-4 control-label']) !!}<strong>Meter</strong>
                        <div class="col-md-6">
                            {!! Form::text('lbr_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                            {!! $errors->first('lbr_gedung', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('tinggi_gedung') ? 'has-error' : ''}}">
                        {!! Form::label('tinggi_gedung', 'Tinggi Gedung', ['class' => 'col-md-4 control-label']) !!}<strong>Meter</strong>
                        <div class="col-md-6">
                            {!! Form::text('tinggi_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                            {!! $errors->first('tinggi_gedung', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('luas_gedung') ? 'has-error' : ''}}">
                        {!! Form::label('luas_gedung', 'Luas Gedung', ['class' => 'col-md-4 control-label']) !!}<strong>m<sub>2</sub></strong>
                        <div class="col-md-6">
                            {!! Form::text('luas_gedung', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                            {!! $errors->first('luas_gedung', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

@section('htmlpage')

@endsection

@section('jspage')
    <!-- jQuery Smart Wizard -->
    <script src="{{ asset('plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>

@endsection