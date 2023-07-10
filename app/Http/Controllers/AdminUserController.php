<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Menejemen User',
            'user' => User::get(),
            'content' => 'admin/user/index'];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $data = [
            'title' => 'Tambah User',
            'content' => 'admin/user/add'
        ];
        return view('admin.layouts.wrapper', $data);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // dd($request->all());
        $data =$request->validate([
            'name' =>'required',
            'email' =>'required|unique:users',
            'password' =>'required|min:3',
            're_password' =>'required|same:password'
        ]);

        $data['password'] = Hash::make($data['password']);

        User::create($data);
        Alert::success('Sukses', 'Data Berhasil ditambahkan');
        return redirect('/admin/user');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title' => 'Edit User',
            'user' => User::find($id),
            'content' => 'admin/user/add'
        ];
        return view('admin.layouts.wrapper', $data);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $data =$request->validate([
            'name' =>'required',
            'email' =>'required|unique:users,email,'.$user->id,
            // 'password' =>'min:3',
            // 're_password' =>'required|same:password'
        ]);

        

        if($request->password){
            $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $user->password;
        }
        $user->update($data);
        Alert::success('Sukses', 'Data Berhasil diubah');
        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/user');
    }
}
