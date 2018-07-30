<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Session;
use App\Ruang;
use App\HitungIke;
use Illuminate\Http\Request;

class HitungIkeController extends Controller
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
            $hitungike = HitungIke::where('wktu_pengukuran', 'LIKE', "%$keyword%")
                ->orWhere('hsil_perhitungan', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $hitungike = HitungIke::orderBy('wktu_pengukuran', 'desc')->paginate($perPage);
        }

        return view('admin.hitung-ike.index', compact('hitungike'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.hitung-ike.create');
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
        
        HitungIke::create($requestData);

        return redirect('manage/hitung-ike')->with('flash_message', 'HitungIke added!');
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
        $hitungike = HitungIke::findOrFail($id);

        return view('admin.hitung-ike.show', compact('hitungike'));
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
        $hitungike = HitungIke::findOrFail($id);

        return view('admin.hitung-ike.edit', compact('hitungike'));
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
        
        $hitungike = HitungIke::findOrFail($id);
        $hitungike->update($requestData);

        return redirect('manage/hitung-ike')->with('flash_message', 'HitungIke updated!');
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
        HitungIke::destroy($id);

        return redirect('manage/hitung-ike')->with('flash_message', 'HitungIke deleted!');
    }
}
