@extends('layouts.admin.main')

@section('title')
    Lihat Data #{{ $bebanmesin->bebanmesin_id }} Beban Mesin
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3>Lihat Beban Mesin</h3>
                  </div>
            </div>

            <div class="clearfix"></div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lihat Data Beban Mesin</h2>
                    <div class="clearfix"></div>
                  </div>
                        <a href="{{ url('/manage/beban-mesin') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <a href="{{ url('/manage/beban-mesin/' . $bebanmesin->bebanmesin_id . '/edit') }}" title="Edit BebanMesin"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['manage/bebanmesin', $bebanmesin->bebanmesin_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete BebanMesin',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $bebanmesin->bebanmesin_id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nama Ruang </th>
                                        <td> {{ $bebanmesin->nm_ruang }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nama Mesin </th>
                                        <td> {{ $bebanmesin->nm_mesin }} </td>
                                    </tr>
                                    <tr>
                                        <th> Daya Mesin </th>
                                        <td> {{ $bebanmesin->daya_mesin }} </td>
                                    </tr>
                                    <tr>
                                        <th> Total Pemakaian </th>
                                        <td> {{ $bebanmesin->tot_pemakaian }} </td>
                                    </tr>
                                    <tr>
                                        <th> Waktu Pengukuran </th>
                                        <td> {{ $bebanmesin->wktu_pengukuran }} </td>
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