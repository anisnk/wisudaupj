<?php

namespace App\Http\Controllers;

use App\TamuUndangan;
use App\Mail\GuestMail;
use App\Mail\QrMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('tamu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tamuUndangan = TamuUndangan::all();

        return view('tamu.create', compact('tamuUndangan'));

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
            'instansi' => 'required',
            'jabatan' => 'required',
            'email' => 'required',
            'no_telp' => 'required'

        ]);

        $tamuUndangan = TamuUndangan::create($data);
        Mail::to($tamuUndangan->email)->send(new QrMail($tamuUndangan));
        return redirect(route('tamu.index'));
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
        //
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
        //
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
