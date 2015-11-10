<?php

namespace App\Http\Controllers;
use App\kabupaten_tbl;
use App\provinsi_tbl;
use Illuminate\Http\Request;
//use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class kabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title="Data Kabupaten";
        $kabupaten_tbls=kabupaten_tbl::paginate(5);
        return view('pages/master/kab/index',compact('kabupaten_tbls','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title="Input data Kabupaten";
        $provinsi_tbls=provinsi_tbl::all('id','nama');
        return view('pages.master.kab.create',compact('page_title','provinsi_tbls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kabupaten_tbl=Request::all();
        kabupaten_tbl::create($kabupaten_tbl);
        return redirect('kabupaten');
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
        $page_title="Update data kabupaten";
        $kab=kabupaten_tbl::find($id);
        $provinsi_tbls=provinsi_tbl::all('id','nama');
        return view('pages.master.kab.edit',compact('kab','page_title','provinsi_tbls'));
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
        $kabUpdate=Request::all();
        $kab=kabupaten_tbl::find($id);
        $kab->update($kabUpdate);
        return redirect('kabupaten');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kabupaten_tbl::find($id)->delete();
        return redirect('kabupaten');
    }
}
