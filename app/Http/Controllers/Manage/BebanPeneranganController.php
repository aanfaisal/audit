<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use DB;
use Session;
use App\BebanPenerangan;
use App\HitungIke;
use App\Profil;
use App\Ruang;

class BebanPeneranganController extends Controller 
{
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\View\View
 */
public function index(Request $request) 
{
	$keyword = $request->get('search');
	$perPage = 29;

	if (!empty($keyword)) {
		$bebanpenerangan = BebanPenerangan::where('nm_ruang', 'LIKE', "%$keyword%")
			->orWhere('jns_lamp', 'LIKE', "%$keyword%")
			->orWhere('jml_lamp', 'LIKE', "%$keyword%")
			->orWhere('daya_lamp', 'LIKE', "%$keyword%")
			->orWhere('tot_pemakaian', 'LIKE', "%$keyword%")
			->orWhere('wktu_pengukuran', 'LIKE', "%$keyword%")
			->orWhere('tot_dayapen', 'LIKE', "%$keyword%")
			->latest()->paginate($perPage);
	} else {
		$bebanpenerangan = BebanPenerangan::orderBy('wktu_pengukuran', 'desc')->paginate($perPage);
	}

	return view('admin.beban-penerangan.index', compact('bebanpenerangan'));
}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\View\View
 */
public function create() 
{
	$nm_ruang = DB::table('ruangs')->pluck('nm_ruang', 'ruang_id');
	return view('admin.beban-penerangan.create1')->with('nm_ruang', $nm_ruang);
}

/**
 * Store a newly created resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 *
 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
 */
public function store(Request $request) 
{

	$requestData = $request->all();

	//BebanPenerangan::create($requestData);
	//dd($requestData);
	//
	$dayatotal = $request->daya_lamp * $request->jml_lamp * $request->tot_pemakaian / 1000;
	
	$BebanPen = new BebanPenerangan;

	
	$BebanPen->ruang_id =$request->ruang_id;
	$BebanPen->jns_lamp = $request->jns_lamp;
	$BebanPen->jml_lamp = $request->jml_lamp;

	$BebanPen->daya_lamp =$request->daya_lamp;
	$BebanPen->tot_pemakaian = $request->tot_pemakaian;
	$BebanPen->wktu_pengukuran = $request->wktu_pengukuran;
	$BebanPen->tot_dayapen = $dayatotal;
	
	$BebanPen->save();
	
	$cek= HitungIke::where('wktu_pengukuran', '=', Input::get('wktu_pengukuran'))->exists();
	$bebanpen= BebanMesin::where('wktu_pengukuran', '=' , Input::get('wktu_pengukuran'))->sum('tot_dayapen');
	$luas= DB::table('profils')->where('profil_id', 1)->pluck('luas_gedung');
	$hsil = $bebanpen / $luas;

	if(!$cek)
	{
			$hasil = $hsil;
			$hitung = new HitungIke;
			$hitung->wktu_pengukuran = $request->wktu_pengukuran;
			$hitung->hsil_perhitungan = $hasil;
			$hitung->save();
	}
		
	Session::flash("flash_notification", [
		"level" => "success",
		"message" => "Berhasil Menyimpan Data Beban Penerangan",
	]);

	return redirect('manage/beban-penerangan');
}

/**
 * Display the specified resource.
 *
 * @param  int  $id
 *
 * @return \Illuminate\View\View
 */
public function show($id) 
{
	$bebanpenerangan = BebanPenerangan::findOrFail($id);

	return view('admin.beban-penerangan.show', compact('bebanpenerangan'));
}

/**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 *
 * @return \Illuminate\View\View
 */
public function edit($id) 
{
	$bebanpenerangan = BebanPenerangan::findOrFail($id);

	return view('admin.beban-penerangan.edit', compact('bebanpenerangan'));
}

/**
 * Update the specified resource in storage.
 *
 * @param \Illuminate\Http\Request $request
 * @param  int  $id
 *
 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
 */
public function update(Request $request, $id) 
{

	$requestData = $request->all();

	$bebanpenerangan = BebanPenerangan::findOrFail($id);
	$bebanpenerangan->update($requestData);

	$cek= HitungIke::where('wktu_pengukuran', '=', Input::get('wktu_pengukuran'))->exists();
	$bebanpen= BebanMesin::where('wktu_pengukuran', '=' , Input::get('wktu_pengukuran'))->sum('tot_dayapen');
	$luas= DB::table('profils')->where('profil_id', 1)->pluck('luas_gedung');
	$hsil = $bebanpen / $luas;

	if(!$cek)
	{
			$hasil = $hsil;
			$hitung = new HitungIke;
			$hitung->wktu_pengukuran = $request->wktu_pengukuran;
			$hitung->hsil_perhitungan = $hasil;
			$hitung->save();
	}
	
	Session::flash("flash_notification", [
		"level" => "success",
		"message" => "Berhasil Mengupdate Data Beban Penerangan",
	]);

	return redirect('manage/beban-penerangan');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 *
 * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
 */
public function destroy($id) 
{
	BebanPenerangan::destroy($id);

	Session::flash("flash_notification", [
		"level" => "success",
		"message" => "Berhasil Menghapus Data Beban Penerangan",
	]);

	return redirect('manage/beban-penerangan');
}
}
