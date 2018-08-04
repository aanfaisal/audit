<?php
	$encrypter = app('Illuminate\Encryption\Encrypter'); 
	$encrypted_token = $encrypter->encrypt(csrf_token());  
?>
@extends('template')  

@section('navbar')

	<div id="page-wrapper">
		<div class="container-fluid">
			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">                        
					<ol class="breadcrumb">
						<li class="inactive">
							<i class="fa fa-dashboard"></i>
								<a href="{{asset('/dashboard') }}">Dashboard</a> 
						</li>
						<li class="inactive">
							<i class="fa fa-check-circle"></i>
								<a href="{{asset('/peminjaman') }}">Peminjaman</a>                
						</li>
						<li class="active">
							Tambah Peminjaman
						</li>
					</ol>
				</div>
			</div>
				<!-- /.row -->
@stop

@section('main')

<div class="content">
	<div class="row">
		<div class="col-sm-12">

			@include('_partial.flash_message_hapus')

			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Tambah Peminjaman</h3>
				</div>
				<div class="panel-body">
					{!! Form::open(array('url' => 'peminjaman', 'class' => 'horizontal-form', 'role' => 'form', 'method' => 'post')) !!}
					{{-- {!! Form::hidden('kode', $kode, array('id' => 'kode')) !!} --}}
					{{-- {!! Form::text('id_peminjaman', $id_peminjaman, array('id' => 'id_peminjaman')) !!}  --}}
					<input id="token" type="hidden" value="{{$encrypted_token}}">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label">Kode</label>
							{!! Form::text('kode', $kode, array('class' => 'form-control', 'readonly' => true)) !!}
							@if($errors->has('kode'))
							<span class="help-block" style="color:red;">{{ $errors->first('kode') }}</span>
							@endif
						</div>
					</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Anggota</label>
						{!! Form::select('id_anggota', $anggota_list, null, array('class' => 'form-control','id' => 'id_anggota','placeholder' => 'Pilih Anggota..')) !!}
						@if($errors->has('id_anggota'))
							  <span class="help-block" style="color:red;">{{ $errors->first('id_anggota') }}</span>
						@endif
					</div> 
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Tanggal Pinjam</label>
						{!! Form::text('tgl_pinjam', date('d-m-Y'), array('class' => 'form-control','readonly' => true , 'id' => 'tgl_pinjam')) !!}
						@if($errors->has('tgl_pinjam'))
						  <span class="help-block" style="color:red;">{{ $errors->first('tgl_pinjam') }}</span>
						@endif
					</div>
				</div>

				{{-- <div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Tanggal Kembali</label>
						{!! Form::text('tgl_kembali', $tgl_kembali, array('class' => 'form-control','readonly' => true , 'id' => 'tgl_kembali')) !!}
						@if($errors->has('tgl_kembali'))
						  <span class="help-block" style="color:red;">{{ $errors->first('tgl_kembali') }}</span>
						@endif
					</div>
				</div> --}}

				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Tanggal Kembali</label>
						{!! Form::text('tgl_kembali', date('d-m-Y'), array('class' => 'form-control date-picker', 'id' => 'tgl_kembali')) !!}
						@if($errors->has('tgl_kembali'))
						  <span class="help-block" style="color:red;">{{ $errors->first('tgl_kembali') }}</span>
						@endif
					</div>
				</div>
		  </div>

		<div class="row">
			<div class="col-md-12">
				<div class="portlet">
					<div class="portlet-body">
						<div class="table-container">
							<table class="table table-striped table-bordered table-hover" id="datatable_ajax">
								<thead>
									<tr role="row" class="heading" bgcolor="#67dbc6">
										<th class="col-md-4">Judul Buku</th>
										<th class="col-md-3">Penulis</th>
										<th class="col-md-2">Penerbit</th>
										<th class="col-md-1">Tahun</th>
										<th class="col-md-1">Stok</th>                     
										<th class="col-md-2">&nbsp;</th>
									</tr>
									<tr role="row" class="filter">
										<td>
										  {!! Form::hidden('id', null, array('id' => 'id')) !!}

										  {!! Form::text('judul', null, array('class' => 'form-control form-filter input-sm ', 'id' => 'judul')) !!}
											<p class="errorJudul text-center alert alert-danger hidden"></p> 

										  {{-- {!! Form::select('judul', $buku_list, null, array('class' => 'form-control','id' => 'judul','placeholder' => 'Pilih Anggota..')) !!} --}}

										  
									  </td>
									  <td>
										{!! Form::text('id_penulis', null, array('class' => 'form-control form-filter input-sm', 'id' => 'id_penulis')) !!}
										  
									  </td>
									  <td>
										  {!! Form::text('id_penerbit', null, array('class' => 'form-control form-filter input-sm', 'id' => 'id_penerbit')) !!}
										  
									  </td>
									  <td>
										  {!! Form::text('id_tahun', null, array('class' => 'form-control form-filter input-sm', 'id' => 'id_tahun')) !!}
										  
									  </td>
									  <td>
										  {!! Form::text('stok', null, array('class' => 'form-control form-filter input-sm', 'id' => 'stok')) !!}
										  
									  </td>
									 
									  <td style="text-align:center;">
										  {!! Form::button(' Tambah ', array('class' => 'btn btn btn-sm bg-maroon glyphicon glyphicon-plus add', 'name' => 'op','onclick' => 'window.location.reload()')) !!}
									  </td>
								</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<br>

	  <div class="row">
			<div class="col-md-12">
				<div class="portlet">
					<div class="portlet-body">
						<div class="table-container">
							<table class="table table-striped table-bordered table-hover"  {{-- id="table" --}} >
								<thead>
									<tr bgcolor="#67dbc6">
										<th>Judul Buku</th>
										<th>Penulis</th>  
										<th>Penerbit</th>
										<th>Tahun</th>             
										<th style="text-align:center;">Aksi</th>
									</tr>
									</thead>
									<tbody id="item-list" name="item-list">
									@if(Session::has('items'))
									<?php $i = 0 ?>
									@foreach(Session::get('items') as $temp)
										<tr id="item{{ $temp['id'] }}">
											<td style="text-align:left;width:2%">{{ $temp['judul'] }}</td>
											<td style="text-align:left;width:2%">{{ $temp['id_penulis'] }}</td>       
											<td style="text-align:left;width:2%;">{{ $temp['id_penerbit'] }}</td>
											<td style="text-align:left;width:2%;">{{ $temp['id_tahun'] }}</td>            
											<td style="text-align:center;width:2%;">
												<a href="{{url('peminjaman/deleteitem', $i++)}}" class="btn btn-xs btn-danger">
												Delete <i class="fa fa-trash"></i> </a>
											</td>
										</tr>
									@endforeach

									<input type="hidden" name="jml_buku" value="{{ $i }}">



									@endif

									</tbody>
								</table>

								<table>
									<tr bgcolor="#67dbc6">
										<th>
											Keterangan: Jumlah pinjaman maksimal 5 (lima) buku !!!
										</th>	
									</tr>
								</table>
		
			<div class="pull-right">

		  	@if($i < 6)

		  		<!-- tombol submit -->
			  	<div class="text-right">
				  <button type="submit" class="btn btn btn-sm bg-blue fa fa-save" ><i class=" icon-floppy-disk"></i> Simpan </button>
				</div>

		 	@endif 
								
@endsection


<!-- jQuery 2.2.3 -->
{!! Html::script("assets/plugins/jQuery/jquery-2.2.3.min.js") !!} 
{{-- jqueryUI --}}
{!! Html::script("/assets/plugins/jquery-ui/jquery-ui.js") !!}
{!! Html::script("/assets/app/peminjaman.js") !!}

<script type="text/javascript">

	$(document).ready(function() //model function jquery
	{
		$("#judul").autocomplete({
			source		: "{{ url('peminjaman/search/item') }}",
			autoFocus   : true,
			minLength	: 1,
			select: function( event, ui ) 
			{
				var itemId = event.target.id;
				$('#id').val(ui.item.id);
				$('#judul').val(ui.item.value); //harus value -> dr JqueryUi 
				$('#id_penulis').val(ui.item.id_penulis);
				$('#id_penerbit').val(ui.item.id_penerbit);
				$('#id_tahun').val(ui.item.id_tahun);
				$('#stok').val(ui.item.stok);
			}
		});

		$('.date-picker').datepicker({
			showOn: "button",
			changeMonth: true,
			changeYear: true,
			yearRange: "-1:+0",
			dateFormat: 'yy/mm/dd',
			// maxDate: '0',
			language: 'id',
			highLight: true,
			autoclose: true
		});

		$('#id_anggota').select2();

		// +++++++++++++++++++++++++++++++++ hidding tombol simpan +++++++++++++++++++++++
		$("#judul").change(function() {
			var value = $('#stok').val();

		    if (value > 0 && value.length > 0) {
		        // Exist text in your input
		        $(".add").show();
		    } else {
		       alert( "STOK BUKU HABIS !!!" );
		       $(".add").hide();
		    }		    
		});

	});


		// $("#stok").bind("change", function() {
		// $('#judul').on('keyup, keydown, change', function () {
		// $("#judul").change(function() {
		// $('#stok').change(function () {
		// var value = $(this).val();
	/*	    var value = $('#stok').val();

		    if (value > 0 && value.length > 0) {
		        // Exist text in your input
		        $(".add").show();
		    } else {
		        $(".add").hide();
		    }
	*/


	

	// function sisaStok() 
	// {
		 
	//     var stok = 0;    
	//     var jumlah = $('#jumlah').val();
	//     var jml_barang = $('#jml_barang').val();   

	//     if (jumlah >= 0 ) 
	//     {
	//         stok = (jml_barang - jumlah);        
	//         $('#jml_barang').val(stok);        
	//     }else if(stok<0) 
	//     {     
	//         $('#jml_barang').val('habis'); 
	//     }
	// }
	// 
	// 
	
	// $(document).ready(function(){ 
	// 	$('#stok').on('keyup change', function () {

	// 	    var value = $(this).val();
	// 	    if (value > 0 && value.length > 0) {
	// 	        // Exist text in your input
	// 	        $(".add").show();
	// 	    } else {
	// 	        $(".add").hide();
	// 	    }
	// 	});

	// };

</script>



	{{--   <script type="text/javascript">
	  
	  function clear_sale()
	  {
		if(confirm('Do you want to leave without saving ?'))
		{
		  
			$.ajax({
			  url : "{{ url('clearsale') }}",
			  type: "POST",
			  dataType: "JSON",
			  success: function(data)
			  {
				 reload_table();
				 $('[name="customername"]').val('');
				 $('[name="email"]').val('');
				 $('[name="address"]').val('');
			  }
		  });

		}
	  }
	  

	  </script>

	
	  

 --}}

