<?php

namespace App\Http\Controllers;
use App\provinsi_tbl;
use App\babin_tbl;
//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class provController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title="Data Provinsi";
        $provinsi_tbls=provinsi_tbl::paginate(5);
        return view('pages.master.prov.index',compact('provinsi_tbls','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title="Input data Provinsi";
        $babin_tbls=babin_tbl::all(['id','nama']);
        return view('pages.master.prov.create',compact('babin_tbls','page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provinsi_tbl=Request::all();
        provinsi_tbl::create($provinsi_tbl);
        return redirect('provinsi');
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
        $page_title="Update data provinsi";
        $prov=provinsi_tbl::find($id);
        $babin_tbls=babin_tbl::all(['id','nama']);
        return view('pages.master.prov.edit',compact('prov','babin_tbls','page_title'));
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
        $provUpdate=Request::all();
        $prov=provinsi_tbl::find($id);
        $prov->update($provUpdate);
        return redirect('provinsi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        provinsi_tbl::find($id)->delete();
        return redirect('provinsi');
    }
}
