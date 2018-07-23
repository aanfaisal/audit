@extends('layouts.admin.main')

@section('title')
   Lihat Data #{{ $bebanpenerangan->beban_id }} Beban Penerangan
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3>Lihat Data Beban Penerangan</h3>
                  </div>
            </div>

            <div class="clearfix"></div>
            
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lihat Data Beban Penerangan</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                        <a href="{{ url('/manage/beban-penerangan') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <a href="{{ url('/manage/beban-penerangan/' . $bebanpenerangan->beban_id . '/edit') }}" title="Edit BebanPenerangan"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['manage/bebanpenerangan', $bebanpenerangan->beban_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete BebanPenerangan',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $bebanpenerangan->beban_id }}</td>
                                    </tr>
                                    <tr><th> Nm Ruang </th><td> {{ $bebanpenerangan->nm_ruang }} </td></tr><tr><th> Jns Lamp </th><td> {{ $bebanpenerangan->jns_lamp }} </td></tr><tr><th> Jml Lamp </th><td> {{ $bebanpenerangan->jml_lamp }} </td></tr><tr><th> Daya Lamp </th><td> {{ $bebanpenerangan->daya_lamp }} </td></tr><tr><th> Tot Pemakaian </th><td> {{ $bebanpenerangan->tot_pemakaian }} </td></tr>
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