@extends('layouts.admin.main')

@section('title')
    Buat Data Beban Mesin
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3>Buat Beban Mesin</h3>
                  </div>
            </div>

            <div class="clearfix"></div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Buat Data Beban Mesin</h2>
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
                        <a href="{{ url('/manage/beban-mesin') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/manage/beban-mesin', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.beban-mesin.form')

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

    </script>
@endsection