<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBannerController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $user = User::query()->get();
        $data = [
            'title' => 'Manajemen Banner',
            'content' => 'admin/banner/index',
            'banner' => Banner::get(),
        ];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Tambah User',
            //'banner'  => User::get(),
            'content' => 'admin/banner/add',
            
        ];
        
        return view('admin.layouts.wrapper', $data);
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
        $data = $request->validate([
            'headline'  => 'required',
            'desc' => 'required',
            //'urutan'  => 'required',
            'gambar'  => 'required',

        ]);

        $data['urutan'] = 0;
        //upload gambar
        if ($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $file_name = time(). '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/banner/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        }else{
            $data['gambar'] = null;
        }
        
        Banner::create($data);
         Alert::success('Sukses', 'Data Berhasil ditambahkan');
        return redirect('/admin/banner');
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
    public function edit(Banner $banner)
    {
        //
        $data = [
            'title' => 'Edit User',
            'banner'  => $banner,
            'content' => 'admin/banner/add'
        ];
        return view('admin.layouts.wrapper', $data);
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
        $banner = Banner::find($id);
        $data = $request->validate([
            'headline'  => 'required',
            'desc' => 'required',
            //'urutan'  => 'required',
           // 'gambar'  => 'required',

        ]);

        $data['urutan'] = 0;
        //upload gambar
        if ($request->hasFile('gambar')){

            if($banner->gambar !=null){
                unlink($banner->gambar);
            }

            $gambar = $request->file('gambar');
            $file_name = time(). '-' . $gambar->getClientOriginalName();

            $storage = 'uploads/banner/';
            $gambar->move($storage, $file_name);
            $data['gambar'] = $storage . $file_name;
        }else{
            $data['gambar'] = $banner->gambar;
        }
        
        $banner->update($data);
         Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/banner');
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
        $user = Banner::find($id);
        $user->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/banner');
    }
}
