<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\babin_tbl;
use App\Http\Controllers\Controller;

class babinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title="Data Babin";
        $babin_tbls = babin_tbl::paginate(5);
        return view('pages.master.babin.index',compact('babin_tbls','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title="Input data Babin";
        return view('pages.master.babin.create',compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $babin_tbl=Request::all();
        babin_tbl::create($babin_tbl);
        return redirect('babin');
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
        $page_title="Update data babin";
        $babin=babin_tbl::find($id);
        return view('pages.master.babin.edit',compact('babin','page_title'));
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
        $babinUpdate=Request::all();
        $babin=babin_tbl::find($id);
        $babin->update($babinUpdate);
        return redirect('babin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        babin_tbl::find($id)->delete();
        return redirect('babin');
    }
}
