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

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
                      <h3>Hi, {{ auth()->user()->name }}</h3>
                      <p>Selamat Datang di {{ env('APP_NAME') }} ~ Sistem Informasi Audit Energi Listrik</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="dashboard_graph x_panel">
                        <div class="row x_title">
                          <div class="col-md-6">
                            <h3>Graph IKE Perhari</h3>
                          </div>
                        </div>
                        <div class="x_content">

                                        

                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                      <div class="dashboard_graph x_panel">
                        <div class="row x_title">
                          <div class="col-md-6">
                            <h3>Graph IKE Perbulan</h3>
                          </div>
                        </div>
                        <div class="x_content">

                                        

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
         <div class="bs-example" data-example-id="simple-jumbotron">
              <div class="jumbotron">
                <h3>Status Standar IKE</h3>
                <p>Nama Gedung : Gedung D Universitas Wahid Hasyim Semarang</p>
                <p>Sesuai dengan SNI 6096:2011 maka Gedung ini dinyatakan<strong> Cukup Efisien</strong> dengan nilai IKE rata-rata<strong> 13,68</strong><p> 
              </div>
          </div>
    </div>
</div>
<!-- /page content -->

@endsection
