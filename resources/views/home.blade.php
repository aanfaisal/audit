@extends('layouts.admin.main')

@section('title')
    Dashboard
@endsection

@section('maincontent')
 <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">

                  </div>
            </div>

            <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2> <small></small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="container">
                    <div class="jumbotron">
                      <h3>Hi, {{ auth()->user()->name }}</h3>
                      <p>Selamat Datang di {{ env('APP_NAME') }} ~ Sistem Informasi Audit Energi Listrik</p>
                    </div>
                  </div>
                 <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="dashboard_graph x_panel">
                        <div class="row x_title">
                          <div class="col-md-12">
                            <h3>Graph IKE 30 Hari Terakhir</h3>
                          </div>
                        </div>
                        <div class="x_content">

                                     {!! $bulan->render() !!}   

                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="dashboard_graph x_panel">
                        <div class="row x_title">
                          <div class="col-md-12">
                            <h3>Graph IKE 7 Hari Terakhir</h3>
                          </div>
                        </div>
                        <div class="x_content">

                                         {!! $charti->render() !!} 

                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="dashboard_graph x_panel">
                        <div class="row x_title">
                          <div class="col-md-12">
                            <h3>Graph IKE 12 Bulan Terakhir</h3>
                          </div>
                        </div>
                        <div class="x_content">

                                     {!! $chart->render() !!}   

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
         <div class="container">
              <div class="jumbotron">
                <h3>Status Standar IKE</h3>
                <p>Nama Gedung : 
                  @foreach ($gedung as $dt)
                              {{ $dt }}
                  @endforeach<p>
                <p>
                  Nama Institusi :
                    @foreach ($nama as $dt)
                              {{ $dt }}
                    @endforeach

                </p>
                <p>Sesuai dengan SNI 6096:2011 maka Gedung ini dinyatakan
                  <strong>
                        @if ($rata2 < 8)
                            Sangat Efisien
                        @elseif ($rata2 < 12)
                            Efisien
                        @elseif ($rata2 < 14)
                            Cukup Efisien
                        @elseif ($rata2 < 19)
                            Cenderung Tidak Efisien
                        @elseif ($rata2 < 23)
                            Tidak Efisien
                        @else
                            Sangat Tidak Efisien
                        @endif
                  </strong>
                  dengan nilai IKE rata-rata<strong> {{ number_format($rata2, 2, '.', '') }}</strong><p> 
              </div>
          </div>
    </div>
</div>
<!-- /page content -->

@endsection
@section('htmlpage')
 {!! Charts::assets() !!}
@endsection