@extends('layouts.admin.main')

@section('title')
    Buat Data Beban AC (Air Conditioner)
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3>Beban AC (Air Conditioner)</h3>
                  </div>
            </div>

            <div class="clearfix"></div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Beban AC</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
                        <a href="{{ url('/manage/beban-ac') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/manage/beban-ac', 'class' => 'form-horizontal', 'files' => true]) !!}

                        {{-- @include ('admin.beban-ac.form') --}}
                <div class="form-group {{ $errors->has('nm_ruang') ? 'has-error' : ''}}">
                    <label for="nm_ruang" class="col-md-4 control-label">Nama Ruang</label>
                    <div class="col-md-6">
                        {!! Form::select('nm_ruang', $nm_ruang,null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
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

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('htmlpage')

@endsection

@section('jspage')
    <!-- DateJS -->
    <script src="{{ asset('plugins/DateJS/build/date.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('plugins/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    
    <script type="text/javascript">
        

    $("select").change(function() {
        $.ajaxSetup({
           headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
           url: "{{ url('ajaxruang') }}",
           type: "PATCH",
           data: {id: $( "#nm_ruang :selected" ).val()}, //send data to controller
           success: function(result){
               console.log(data);
               //check the console then put the data where you want
           }
        });
    $.ajax();
});

    </script>
@endsection