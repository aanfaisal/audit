@extends('layouts.admin.main')

@section('title')
    Data Beban Mesin
@endsection

@section('maincontent')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                  <div class="title_left">
                    <h3>Data Beban Mesin</h3>
                  </div>
            </div>
  
            <div class="clearfix"></div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>   Data Beban Mesin</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Export PDF</a>
                          </li>
                          </li>
                        </ul>
                      </li>
                    </ul>

                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
            @include('layouts._flash')
                        <a href="{{ url('/manage/beban-mesin/create') }}" class="btn btn-success btn-sm" title="Add New BebanMesin">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/manage/beban-mesin', 'class' => 'col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search', 'role' => 'search'])  !!}
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
                                        <th>ID</th><th>Nm Ruang</th><th>Nm Mesin</th><th>Daya Mesin</th><th>Tot Pemakaian</th><th>Wktu Pengukuran</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($bebanmesin as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nm_ruang }}</td><td>{{ $item->nm_mesin }}</td><td>{{ $item->daya_mesin }}</td><td>{{ $item->tot_pemakaian }}</td><td>{{ $item->wktu_pengukuran }}</td>
                                        <td>
                                            <a href="{{ url('/manage/beban-mesin/' . $item->bebanmesin_id) }}" title="View BebanMesin"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/manage/beban-mesin/' . $item->bebanmesin_id . '/edit') }}" title="Edit BebanMesin"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/manage/beban-mesin', $item->bebanmesin_id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete BebanMesin',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $bebanmesin->appends(['search' => Request::get('search')])->render() !!} </div>
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