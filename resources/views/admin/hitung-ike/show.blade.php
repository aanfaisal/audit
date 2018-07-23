@extends('layouts.admin.main')

@section('title')
    Lihat Data Perhitungan IKE
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3> Lihat Data Perhitungan IKE</h3>
                  </div>
            </div>
 
            <div class="clearfix"></div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> Lihat Data Perhitungan IKE</h2>
                    <div class="clearfix"></div>
                  </div>
                  

                  <div class="x_content">

                        <a href="{{ url('/manage/hitung-ike') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/manage/hitung-ike/' . $hitungike->ike_id . '/edit') }}" title="Edit HitungIke"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['manage/hitungike', $hitungike->ike_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete HitungIke',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $hitungike->ike_id }}</td>
                                    </tr>
                                    <tr><th> Wktu Pengukuran </th><td> {{ $hitungike->wktu_pengukuran }} </td></tr><tr><th> Hsil Perhitungan </th><td> {{ $hitungike->hsil_perhitungan }} </td></tr>
                                </tbody>
                            </table>
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