<?php

namespace App\Http\Controllers\Manage;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\HitungIKE;
use Illuminate\Http\Request;

class HitungIKEController extends Controller
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
            $hitungike = HitungIKE::where('wktu_pengukuran', 'LIKE', "%$keyword%")
                ->orWhere('hsil_perhitungan', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $hitungike = HitungIKE::latest()->paginate($perPage);
        }

        return view('hitung-i-k-e.index', compact('hitungike'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('hitung-i-k-e.create');
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
        
        HitungIKE::create($requestData);

        return redirect('manage/hitung-i-k-e')->with('flash_message', 'HitungIKE added!');
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
        $hitungike = HitungIKE::findOrFail($id);

        return view('hitung-i-k-e.show', compact('hitungike'));
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
        $hitungike = HitungIKE::findOrFail($id);

        return view('hitung-i-k-e.edit', compact('hitungike'));
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
        
        $hitungike = HitungIKE::findOrFail($id);
        $hitungike->update($requestData);

        return redirect('manage/hitung-i-k-e')->with('flash_message', 'HitungIKE updated!');
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
        HitungIKE::destroy($id);

        return redirect('manage/hitung-i-k-e')->with('flash_message', 'HitungIKE deleted!');
    }
}
