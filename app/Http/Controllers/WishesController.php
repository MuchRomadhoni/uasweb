<?php

namespace App\Http\Controllers;

use App\Wish;
use Illuminate\Http\Request;
use Illuminate\Http\DB;

class WishesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        $pesanan = DB::table('pesanan')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('landingUser');
    }
    public function store(Request $request)
    {
        DB::table('pesanan')->insert([
        'nama' => $request->nama,
        'email' => $request->email,
        'services' => $request->services,
        'jenis' => $request->jenis,
        'deskripsi' => $request->deskripsi
    ]);

        return redirect()->route('landingUser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function show(Wish $wish)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function edit(Wish $wish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wish $wish)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wish  $wish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wish $wish)
    {
        //
    }
}
