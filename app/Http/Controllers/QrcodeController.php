<?php

namespace App\Http\Controllers;

use App\Qrcode;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth()->user();
        $qrcode = Qrcode::where('user_id', $user->id)->first();

        return view('qrcode.index', compact('qrcode', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth()->user();
        $qrcode = Qrcode::where('user_id', $user->id)->first();

        return view('qrcode.create', compact('qrcode', 'user'));
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
     * @param  \App\qrcode  $qrcode
     * @return \Illuminate\Http\Response
     */
    public function show(qrcode $qrcode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\qrcode  $qrcode
     * @return \Illuminate\Http\Response
     */
    public function edit(qrcode $qrcode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\qrcode  $qrcode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qrcode $qrcode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\qrcode  $qrcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(qrcode $qrcode)
    {
        //
    }
}
