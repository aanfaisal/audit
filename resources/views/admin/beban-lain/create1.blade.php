@extends('layouts.admin.main')

@section('title')
    Buat Data Beban Lain
@endsection

@section('maincontent')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Buat Data Beban Lain</h3>
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
                    <h2>Buat Data Beban Lain</h2>
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

                    {!! Form::open(['url' => '/manage/beban-lain', 'class' => 'form-horizontal', 'files' => true]) !!}
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
                       
                      </ul>
                      <br>
                      <div id="step-1">
              <div class="form-group {{ $errors->has('nm_ruang') ? 'has-error' : ''}}">
                  <label for="ruang_id" class="col-md-4 control-label">Nama Ruang</label>
                  <div class="col-md-6">
                      {!! Form::hidden('ruang_id', null, array('id' => 'ruang_id')) !!}
                      {!! Form::text('nm_ruang', null, array('class' => 'form-control form-filter input-sm ', 'id' => 'nm_ruang')) !!}
                      
                      {!! $errors->first('ruang_id', '<p class="help-block">:message</p>') !!}
                  </div>
              </div>
                      </div>
                      <div id="step-2">
              
              <div class="form-group {{ $errors->has('jml_beban') ? 'has-error' : ''}}">
                  {!! Form::label('jml_beban', 'Jumlah Beban', ['class' => 'col-md-4 control-label']) !!}
                  <div class="col-md-6">
                      
                      {!! Form::text('jml_beban', null, array('class' => 'form-control form-filter input-sm', 'id' => 'jml_beban')) !!}
                      {!! $errors->first('jml_beban', '<p class="help-block">:message</p>') !!}
                  </div>
              </div>
              <div class="form-group {{ $errors->has('daya_beban') ? 'has-error' : ''}}">
                  {!! Form::label('daya_beban', 'Daya Beban', ['class' => 'col-md-4 control-label']) !!}
                  <div class="col-md-6">
                    
                      {!! Form::text('daya_beban', null, array('class' => 'form-control form-filter input-sm', 'id' => 'daya_beban')) !!}
                      {!! $errors->first('daya_beban', '<p class="help-block">:message</p>') !!}
                  </div>
              </div>
              <div class="form-group {{ $errors->has('tot_pemakaian') ? 'has-error' : ''}}">
                  {!! Form::label('tot_pemakaian', 'Tot Pemakaian', ['class' => 'col-md-4 control-label']) !!}
                  <div class="col-md-6">
                      {!! Form::text('tot_pemakaian', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                      {!! $errors->first('tot_pemakaian', '<p class="help-block">:message</p>') !!}
                  </div>
              </div>
              <br><br><br><br><br><br><br><br><br>
              <div class="form-group {{ $errors->has('wktu_pengukuran') ? 'has-error' : ''}}">
                
                  <label for="wktu_pengukuran" class="col-md-4 control-label">Waktu Pengukuran</label>

                  <div class="col-md-6">
                    <div class='input-group date' id='datetimepicker1'>
                        <input type='text' name="wktu_pengukuran" class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                      
                     {{--  {!! Form::input('datetime-local', 'wktu_pengukuran', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} --}}
                      {!! $errors->first('wktu_pengukuran', '<p class="help-block">:message</p>') !!}
                  </div>
              </div>
                      </div>

                    </div>
                    <!-- End SmartWizard Content -->

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
    <!-- jQuery UI-->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.js') }}"></script>

    <script type="text/javascript">
        
  $(document).ready(function() //model function jquery
    {
      $('#datetimepicker1').datetimepicker({
          format: 'YYYY-MM-DD HH:mm'
      });

      $("#nm_ruang").autocomplete({
            source    : "{{ url('ajaxruang') }}",
            autoFocus   : true,
            minLength : 1,
            select: function( event, ui ) 
              {
                var itemId = event.target.id;
                $('#nm_ruang').val(ui.item.value); //harus value -> dr JqueryUi 
                $('#ruang_id').val(ui.item.ruang_id);
                $('#jns_beban').val(ui.item.jns_beban);
                $('#jml_beban').val(ui.item.jml_beban);
                $('#daya_beban').val(ui.item.daya_beban);
                
              }
          });

      $("select").change(function() {
          $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              url: "{{ url('ajaxruang') }}",
              type: "POST",
              data: {id: $("select :selected").val()}, //send data to controller
                  success:function(data){
                      console.log(data);
                      $("#daya_ac").val(data["daya_ac"]);
                      $("#jml_ac").val(data["jml_ac"]);
                  },error:function(){ 
                      console.log("error!!!!");
              }
              });
          $.ajax();
      });
   });
    </script>
@endsection