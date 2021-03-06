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
                    <h2><small>Data</small>Beban AC</h2>
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

                        @include ('admin.beban-ac.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('htmlpage')

@endsection

@section('jspage')

@endsection