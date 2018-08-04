<?php

namespace App\Http\Controllers\Manage;

use Session;
use DB;
use App\Ruang;
use App\BebanPenerangan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


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
		$perPage = 25;

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

		BebanPenerangan::create($requestData);

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
