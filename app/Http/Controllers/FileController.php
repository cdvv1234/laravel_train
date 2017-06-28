<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //過濾檔案
    $this->validate($request, [
             'myFile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

  //  $filename = $request->file('myFile')->getClientOriginalName();
    //$request->myFile->move(public_path('storage'),$filename);
    //Storage::putFile('/storage',$request->file('myFile'));
    //是否傳遞的資料有檔案
   if ($request->hasFile('myFile'))
   {
        //基礎檔案描述
        $data['file_name'] = $request->file('myFile')->getClientOriginalName();
        $data['file_extension'] = $request->file('myFile')->getClientOriginalExtension();
        $data['file_path'] = $request->file('myFile')->getRealPath();
        $data['file_size'] = $request->file('myFile')->getSize();
        $data['file_mime_type'] = $request->file('myFile')->getMimeType();

        //上傳資料夾（路徑）
        $str_destination_path = public_path('storage');

        //移動檔案到該資料夾
        $request->file('myFile')->move( $str_destination_path, $request->file('myFile')->getClientOriginalName() );


        return redirect('/upload')->with(['flash_message'=>'上傳成功喔!']);

    }

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
