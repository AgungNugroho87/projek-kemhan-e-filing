<?php

namespace App\Http\Controllers;

use App\dokumen_tbl;
use App\babin_tbl;
use Illuminate\Http\Request;
//use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class docController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title='Data Upload Dokumen';
        $dokumen_tbls=dokumen_tbl::paginate(5);
        return view('pages.trans.doc.index',compact('dokumen_tbls','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title="Input data Dokumen";
        $babin_tbls=babin_tbl::all(['id','nama']);
        return view('pages.trans.doc.create',compact('babin_tbls','page_title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$dokumen_tbl=Request::all();
        //dokumen_tbl::create($dokumen_tbl);


        $dokumen =new dokumen_tbl(array(
            'judul' => $request->get('judul'),
            'keterangan' => $request->get('keterangan'),
            'nama_file'=>$request->file('image')->getClientOriginalName(),
            'ukuran_file'=>$request->file('image')->getClientSize(),
            'babin_id'=>$request->get('babin_id')
        ));
        $dokumen->save();

        $fileName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(
            base_path().'/public/image/',$fileName
        );
        return redirect('dokumen');




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
        $page_title="Update Document";
        $dok=dokumen_tbl::find($id);
        $babin_tbls=babin_tbl::all(['id','nama']);
        return view('pages.trans.doc.edit',compact('dok','babin_tbls','page_title'));
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
        $dokumenUpdate=Request::all();
        $dokumen=dokumen_tbl::find($id);
        $dokumen->update($dokumenUpdate);
        return redirect('dokumen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dokumen_tbl::find($id)->delete();
        return redirect('dokumen');
    }

    public function rules(){
        return[

        ];
    }
}
