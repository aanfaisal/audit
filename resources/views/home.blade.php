@extends('layouts.admin.main')

@section('title')
    Dashboard
@endsection

@section('maincontent')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <div class="panel-heading">Dashboard</div>
            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
@endsection
