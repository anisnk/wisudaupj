<?php

namespace App\Http\Controllers;

use App\User;
use App\Prodi;
use App\Wisudawan;
use App\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DatadiriController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->user();
        $wisudawan = Wisudawan::where('user_id', $user->id)->first();

        return view('datadiri.index', compact('wisudawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth()->user();
        $wisudawan = Wisudawan::where('user_id', $user->id)->first();
        $prodi=Prodi::all();

        return view('datadiri.create', compact('wisudawan', 'prodi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'nama' => 'required',
            'user_id' => 'required',
            'nim' => 'numeric|unique:wisudawan,nim',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'date',
            'alamat' => 'required',
            'agama' => 'required',
            'no_telp' => 'numeric',
            'ipk' => 'required',
            'judul_ta' => 'required',
            'th_masuk' => 'required',
            'th_keluar' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'no_telp_ortu' => 'numeric',
            'alamat_ortu' => 'required',
            'prodi_id' => 'required'
        ]);

        $wisudawan = Wisudawan::create($data);

        return redirect(route('datadiri.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = auth()->user();


        return view('datadiri.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = request()->validate([
            'nama' => 'required',
            'nim' => 'digits:10',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'date',
            'alamat' => 'required',
            'agama' => 'required',
            'no_telp' => 'required',
            'ipk' => 'required',
            'judul_ta' => 'required',
            'th_masuk' => 'required',
            'th_keluar' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'no_telp_ortu' => 'required',
            'alamat_ortu' => 'required',
        ]);

        auth()->user()->wisudawan->update($data);

        return redirect(route('datadiri.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
