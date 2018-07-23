@extends('layouts.admin.main')

@section('title')
    Buat Profil Gedung
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3>Buat Profil Gedung</h3>
                  </div>
            </div>

            <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                        <div class="x_title">
                            <h2>Data Profil Gedung</h2>
                            <div class="clearfix"></div>
                        </div>

                  <div class="x_content">
                        <a href="{{ url('/manage/profil') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/manage/profil', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.profil.form')

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

@endsection