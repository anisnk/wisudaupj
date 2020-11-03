<?php

namespace App\Http\Controllers;

use App\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->user();
        $pembayaran = Pembayaran::where('user_id', $user->id)->first();

        return view('pembayaran.index', compact('pembayaran', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth()->user();
        $pembayaran = Pembayaran::where('user_id', $user->id)->first();

        return view('pembayaran.create', compact('pembayaran', 'user'));
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
            'nama_bank' => 'required',
            'no_rek' => 'required',
            'atas_nama' => 'required',
            'image' => ['required', 'image'],
            'user_id' => 'required',
            'verifikasi' => ' ',
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        $pembayaran = Pembayaran::create([
            'nama_bank' => $data['nama_bank'],
            'no_rek' => $data['no_rek'],
            'atas_nama' => $data['atas_nama'],
            'image' => $imagePath,
            'user_id' => $data['user_id'],
            'verifikasi' => $data['verifikasi'],
        ]);

        return redirect(route('pembayaran.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
