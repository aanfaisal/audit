@extends('layouts.admin.main')

@section('title')
   Lihat Data #{{ $bebanlain->bebanlain_id }} Beban Lain
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3>Lihat Data Beban Lain</h3>
                  </div>
            </div>
 
            <div class="clearfix"></div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Bebanlain </h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                        <a href="{{ url('/manage/beban-lain') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <a href="{{ url('/manage/beban-lain/' . $bebanlain->bebanlain_id . '/edit') }}" title="Edit BebanLain"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['manage/bebanlain', $bebanlain->bebanlain_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete BebanLain',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $bebanlain->bebanlain_id }}</td>
                                    </tr>
                                    <tr><th> Nama Ruang </th>
                                        <td> {{ $bebanlain->nm_ruang }} </td>
                                    </tr>
                                    <tr><th> Jenis Beban </th>
                                        <td> {{ $bebanlain->jns_beban }} </td>
                                    </tr>
                                    <tr><th> Jumlah Beban </th>
                                        <td> {{ $bebanlain->jml_beban }} </td>
                                    </tr>
                                    <tr><th> Daya Beban </th>
                                        <td> {{ $bebanlain->daya_beban }} </td>
                                    </tr>
                                    <tr><th> Total Pemakaian </th>
                                        <td> {{ $bebanlain->tot_pemakaian }} </td>
                                    </tr>
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