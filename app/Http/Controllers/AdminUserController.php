<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AdminUserController extends Controller
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
            'title' => 'Manajemen User',
            'content' => 'admin/user/index',
            'user' => User::get(),
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
            //'user'  => User::get(),
            'content' => 'admin/user/add',
            
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
            'name'  => 'required',
            'email' => 'required|unique:users',
            'password'  => 'required|min:3',

        ]);
        $data['password']   = Hash::make($data['password']);

        
        User::create($data);
         Alert::success('Sukses', 'Data Berhasil ditambahkan');
        return redirect('/admin/user');
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
    public function edit(User $user)
    {
        //

        // dd($user);
        $data = [
            'title' => 'Edit User',
            'user'  => $user,
            'content' => 'admin/user/add'
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
    public function update(Request $request, User $user)
    {
        //
        // dd($user);
        $data = $request->validate([
            'name'  => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
            'password'  => 'required',
            
        ]);
        // dd($data);
        if($request->password){
            $data['password']   = Hash::make($data['password']);
        } else {
            $data['password'] = $user->password;
        }
        $user->update($data);
         Alert::success('Sukses', 'Data Berhasil diupdate');
        return redirect('/admin/user');
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
        $user = User::find($id);
        $user->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/user');
    }
}
