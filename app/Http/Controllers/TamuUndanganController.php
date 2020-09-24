<?php

namespace App\Http\Controllers;

use App\Mail\GuestMail;
use App\TamuUndangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TamuUndanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_tamu = TamuUndangan::all();
        return view('tamuUndangan.index', compact('data_tamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TamuUndangan  $tamuUndangan
     * @return \Illuminate\Http\Response
     */
    public function show(TamuUndangan $tamuUndangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TamuUndangan  $tamuUndangan
     * @return \Illuminate\Http\Response
     */
    public function edit(TamuUndangan $tamuUndangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TamuUndangan  $tamuUndangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TamuUndangan $tamuUndangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TamuUndangan  $tamuUndangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(TamuUndangan $tamuUndangan)
    {
        //
    }
}
