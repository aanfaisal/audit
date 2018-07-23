@extends('layouts.admin.main')

@section('title')
    Lihat #{{ $bebanac->bebanac_id }} Beban AC (Air Conditioner)
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
                        <a href="{{ url('/manage/beban-ac/' . $bebanac->bebanac_id . '/edit') }}" title="Edit BebanAc"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['manage/bebanac', $bebanac->bebanac_id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete BebanAc',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $bebanac->bebanac_id }}</td>
                                    </tr>
                                    <tr><th> Nm Ruang </th><td> {{ $bebanac->nm_ruang }} </td></tr><tr><th> Jml Ac </th><td> {{ $bebanac->jml_ac }} </td></tr><tr><th> Daya Ac </th><td> {{ $bebanac->daya_ac }} </td></tr><tr><th> Tot Pemakaian </th><td> {{ $bebanac->tot_pemakaian }} </td></tr><tr><th> Wktu Pengukuran </th><td> {{ $bebanac->wktu_pengukuran }} </td></tr>
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