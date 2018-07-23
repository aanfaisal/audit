@extends('layouts.admin.main')

@section('title')
    Data Ruang Gedung
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3>Data Ruang</h3>
                  </div>
            </div>
 
            <div class="clearfix"></div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Ruangan Gedung</h2>
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
            @include('layouts._flash')
                        <a href="{{ url('/manage/ruang/create') }}" class="btn btn-success btn-sm" title="Add New Ruang">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/manage/ruang', 'class' => 'col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Nm Ruang</th><th>Luas Ruang</th><th>Jns Lamp</th><th>Jml Lamp</th><th>Daya Lamp</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($ruang as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nm_ruang }}</td><td>{{ $item->luas_ruang }}</td><td>{{ $item->jns_lamp }}</td><td>{{ $item->jml_lamp }}</td><td>{{ $item->daya_lamp }}</td>
                                        <td>
                                            <a href="{{ url('/manage/ruang/' . $item->ruang_id) }}" title="View Ruang"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/manage/ruang/' . $item->ruang_id . '/edit') }}" title="Edit Ruang"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/manage/ruang', $item->ruang_id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Ruang',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $ruang->appends(['search' => Request::get('search')])->render() !!} </div>
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