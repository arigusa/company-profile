<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBannerController extends Controller
{
    // public function index()
    // {
    //     $data = [
    //         'title' => 'Menejemen Banner',
    //         'banner' => Banner::get(),
    //         'content' => 'admin/banner/index'];
    //     return view('admin.layouts.wrapper', $data);
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
        
    //     $data = [
    //         'title' => 'Tambah Banner',
    //         'content' => 'admin/banner/add'
    //     ];
    //     return view('admin.layouts.wrapper', $data);
    
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
        
    //     // dd($request->all());
    //     $data =$request->validate([
    //         'name' =>'required',
    //         'desc' =>'required',
    //         // 'urutan' =>'required',
    //         'gambar' =>'required',
    //         ]);

    //         // $data['urutan'] = 0;
    //     if ($request ->hasFile('gambar')) {
    //         $gambar = $request->file('gambar');
    //         $file_name = time() . '-' . $gambar->getOriginName();

    //         $storage = 'uploads/banners/';
    //         $gambar->move($storage, $file_name);
    //         $data['gambar'] = $storage . $file_name;
    //     } else {
    //         $data['image'] = null;
    //     }
    //     // if($request->hasFile('gambar')) {
    //     //     $gambar = $request->file('gambar');
    //     //     $file_name = time().'-'. $gambar->getClientOriginalName();
            
    //     //     $storage = 'uploads/banners/';
    //     //     $gambar->move($storage, $file_name);
    //     //     $data['gambar'] = $storage.$file_name;
    //     // }else{
    //     //     $data['gambar'] = null;
    //     // }
    //     Banner::create($data);
    //     Alert::success('Sukses', 'Data Berhasil ditambahkan');
    //     return redirect('/admin/banner');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
        
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     $data = [
    //         'title' => 'Edit Banner',
    //         'banner' => Banner::find($id),
    //         'content' => 'admin/banner/add'
    //     ];
    //     return view('admin.layouts.wrapper', $data);
    
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     $banner = Banner::find($id);
    //     $data =$request->validate([
    //         'name' =>'required',
    //         'email' =>'required|unique:users,email,'.$banner->id,
    //         // 'password' =>'min:3',
    //         // 're_password' =>'required|same:password'
    //     ]);

        

    //     // if($request->password){
    //     //     $data['password'] = Hash::make($data['password']);
    //     // } else {
    //     //     $data['password'] = $banner->password;
    //     // }
    //     $banner->update($data);
    //     Alert::success('Sukses', 'Data Berhasil diubah');
    //     return redirect('/admin/banner');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     $banner = Banner::find($id);
    //     $banner->delete();
    //     Alert::success('Sukses', 'Data Berhasil dihapus');
    //     return redirect('/admin/banner');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title' => 'Menejemen Banner',
            'banner' => Banner::get(),
            'content' => 'admin/banner/index'];
        return view('admin.layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $data = [
            'title' => 'Tambah Banner',
            'content' => 'admin/banner/add'
        ];
        return view('admin.layouts.wrapper', $data);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $data = $request->validate([
        'headline' => 'required',
        'des' => 'required',
        'gambar' => 'required'
    ]);

    // Upload gambar
    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $file_name = time() . '-' . $gambar->getClientOriginalName();

        $storage = 'uploads/banners/';
        $gambar->move($storage, $file_name);
        $data['gambar'] = $storage . $file_name;
    } else {
        $data['gambar'] = null;
    }

    Banner::create($data);
    Alert::success('Sukses', 'Data Berhasil ditambahkan');
    return redirect('/admin/banner');
    }


    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = [
            'title' => 'Edit Banner',
            'banner' => Banner::find($id),
            'content' => 'admin/banner/add'
        ];
        return view('admin.layouts.wrapper', $data);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::find($id);
        $data =$request->validate([
            'name' =>'required',
            'email' =>'required|unique:users,email,'.$banner->id,
            // 'password' =>'min:3',
            // 're_password' =>'required|same:password'
        ]);

        

        if($request->password){
            // $data['password'] = Hash::make($data['password']);
        } else {
            $data['password'] = $banner->password;
        }
        $banner->update($data);
        Alert::success('Sukses', 'Data Berhasil diubah');
        return redirect('/admin/banner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        Alert::success('Sukses', 'Data Berhasil dihapus');
        return redirect('/admin/banner');
    }
}
