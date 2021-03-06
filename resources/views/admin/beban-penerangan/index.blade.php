@extends('layouts.admin.main')

@section('title')
   Data Beban Penerangan
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3>Data Beban Penerangan</h3>
                  </div>
            </div>

        <div class="clearfix"></div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>   Data Beban Penerangan</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('laporanbebanpenerangan') }}">Export PDF</a>
                          </li>
                          </li>
                        </ul>
                      </li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>

            <div class="x_content">
                @include('layouts._flash')
                        <a href="{{ url('/manage/beban-penerangan/create') }}" class="btn btn-success btn-sm" title="Add New BebanPenerangan">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/manage/beban-penerangan', 'class' => 'col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search', 'role' => 'search'])  !!}
                        <div class="title_right">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama Ruang</th>
                                        <th>Jenis Lampu</th>
                                        <th>Jumlah Lampu</th>
                                        <th>Daya Lampu (watt)</th>
                                        <th>Total Pemakaian (jam)</th>
                                        <th>Waktu Pengukuran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($bebanpenerangan as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->ruang->nm_ruang }}</td>
                                        <td>{{ $item->jns_lamp }}</td>
                                        <td>{{ $item->jml_lamp }}</td>
                                        <td>{{ $item->daya_lamp }}</td>
                                        <td class="text-center">{{ $item->tot_pemakaian }}</td>
                                        <td>{{ date('D, m/d/Y', strtotime($item->wktu_pengukuran)) }}</td>
                                        <td>
                                            <a href="{{ url('/manage/beban-penerangan/' . $item->beban_id) }}" title="View BebanPenerangan"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></a>
                                            <a href="{{ url('/manage/beban-penerangan/' . $item->beban_id . '/edit') }}" title="Edit BebanPenerangan"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/manage/beban-penerangan', $item->beban_id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete BebanPenerangan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $bebanpenerangan->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection

@section('htmlpage')

@endsection

@section('jspage')

@endsection