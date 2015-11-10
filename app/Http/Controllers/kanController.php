<?php

namespace App\Http\Controllers;

use App\kanminvet_tbl;
use App\provinsi_tbl;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class kanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title="Data Kanminvet";
        $kanminvet_tbls=kanminvet_tbl::paginate(5);
        return view('pages.master.kanminvet.index',compact('kanminvet_tbls','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title="Input data Kanminvet";
        $provinsi_tbls=provinsi_tbl::all('id','nama');
        return view('pages.master.kanminvet.create',compact('page_title','provinsi_tbls'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kanminvet_tbl=Request::all();
        kanminvet_tbl::create($kanminvet_tbl);
        return redirect('kanminvet');
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
        $page_title="Update data kanminvet";
        $kan=kanminvet_tbl::find($id);
        $provinsi_tbls=provinsi_tbl::all('id','nama');
        return view('pages.master.kanminvet.edit',compact('kan','page_title','provinsi_tbls'));
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
        $kanUpdate=Request::all();
        $kan=kanminvet_tbl::find($id);
        $kan->update($kanUpdate);
        return redirect('kanminvet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kanminvet_tbl::find($id)->delete();
        return redirect('kanminvet');
    }
}
