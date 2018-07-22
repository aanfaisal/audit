@extends('layouts.admin.main')

@section('title')
    Hitungan IKE per Waktu
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3>Perhitungan IKE per Waktu Pengukuran</h3>
                  </div>
            </div>
 
            <div class="clearfix"></div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Perhitungan IKE per Waktu Pengukuran</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
            @include('layouts._flash')
                        <a href="{{ url('/manage/hitung-ike/create') }}" class="btn btn-success btn-sm" title="Add New HitungIke">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Baru
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/manage/hitung-ike', 'class' => 'col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search', 'role' => 'search'])  !!}
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
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>No</th><th>Wktu Pengukuran</th><th>Hasil Perhitungan</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($hitungike as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->wktu_pengukuran }}</td><td>{{ $item->hsil_perhitungan }}</td>
                                        <td>
                                            <a href="{{ url('/manage/hitung-ike/' . $item->ike_id) }}" title="View HitungIke"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/manage/hitung-ike/' . $item->ike_id . '/edit') }}" title="Edit HitungIke"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/manage/hitung-ike', $item->ike_id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete HitungIke',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $hitungike->appends(['search' => Request::get('search')])->render() !!} </div>
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