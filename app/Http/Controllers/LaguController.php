<?php

namespace App\Http\Controllers;

use App\Models\Lagu;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lagu::orderBy('id', 'desc')->paginate(7);
        return view('lagu.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lagu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'penyanyi' => 'required',
            'genre' => 'required',
            'album' => 'required',
            'tgl_rilis' => 'required',
        ]);


        Lagu::create($validate);
        return redirect('/lagu')->with('success', 'Berhasil menambahkan list lagu baru!!');
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
        $data = Lagu::where('id',$id)->first();
        return view('lagu.edit')->with('data',$data);
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
        $validate = $request->validate([
            'title' => 'required',
            'penyanyi' => 'required',
            'genre' => 'required',
            'album' => 'required',
            'tgl_rilis' => 'required',
        ]);


        Lagu::where('id', $id)->update($validate);
        return redirect('/lagu')->with('success', 'Berhasil mengubah list lagu !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lagu::where('id', $id)->delete();
        return redirect('/lagu')->with('success', 'Berhasil hapus data lagu!!');
    }
}
