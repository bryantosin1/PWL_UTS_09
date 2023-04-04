<?php

namespace App\Http\Controllers;

use App\Models\Bayi;
use Illuminate\Http\Request;

class BayiController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */   
    public function index(Request $request)
    {
        if($request->has('search')){
            $bayis = Bayi::where('no_urut', 'LIKE', '%' . request('search') . '%')
                ->orWhere('nama', 'LIKE', '%' . request('search') . '%')
                ->orWhere('tanggal_lahir', 'LIKE', '%' . request('search') . '%')
                ->paginate(6);

            return view('bayis.index', ['bayis' => $bayis]);
        }else{
            $bayis = Bayi::orderBy('no_urut', 'asc')->paginate(6);
            return view('bayis.index', compact('bayis'))->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bayis.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBayiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);

        Bayi::create($request->all());

        return redirect()->route('bayis.index')->with('success', 'Data Bayi Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function show($no_urut)
    {
        $Bayi = Bayi::find($no_urut);
        return view('bayis.detail', compact('Bayi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function edit($no_urut)
    {
        $Bayi = Bayi::find($no_urut);
        return view('bayis.edit', compact('Bayi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBayiRequest  $request
     * @param  \App\Models\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_urut)
    {
        $request->validate([
            'no_urut' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'bb_lahir' => 'required',
            'tb_lahir' => 'required',
        ]);

        Bayi::find($no_urut)->update($request->all());

        return redirect()->route('bayis.index')->with('success', 'Data Bayi Berhasil DiUpdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bayi  $bayi
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_urut)
    {

        $Bayi = Bayi::find($no_urut)->delete();
        return redirect()->route('bayis.index')->with('success', 'Data Bayi Berhasil Dihapus');

    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
