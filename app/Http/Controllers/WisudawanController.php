<?php

namespace App\Http\Controllers;

use App\Wisudawan;
use App\Pembayaran;
use Illuminate\Http\Request;

class WisudawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_wisudawan = Wisudawan::all();
        return view('wisudawan_satu.index', compact('data_wisudawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('wisudawan_satu.show', ['wisudawan' => Wisudawan::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('wisudawan_satu.edit', ['wisudawan' => Wisudawan::findOrFail($id)]);
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
            'verifikasi' => '',
        ]);

        $wisudawan = Wisudawan::where('user_id', $id)->first();
        $wisudawan->user->pembayaran->update($data);

        $status = request()->validate([
            'kehadiran' => '',
        ]);

        $wisudawan->update($status);

        return redirect(route('wisudawan.index'));
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
