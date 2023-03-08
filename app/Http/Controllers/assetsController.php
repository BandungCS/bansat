<?php

namespace App\Http\Controllers;

use App\Models\assets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;

class assetsController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        $assetss = assets::latest()->paginate(10);
        return view('assets.index', compact('assetss'));
    }

public function create()
{
    return view('assets.create');
}


/**
* store
*
* @param  mixed $request
* @return void
*/
public function store(Request $request)
{
    $this->validate($request, [
        'image'     => 'required|image|mimes:png,jpg,jpeg',
        'nama'     => 'required',
        'noinv'     => 'required',
        'kelas'   => 'required',
        'tahun'   => 'required',
        'konten'   => 'required',
        'kondisi'   => 'required',
        'kantor'   => 'required',
        'gudang'   => 'required',
        'aula'   => 'required',
        
    ]);

    //upload image
    $image = $request->file('image');
    $image->storeAs('public/assetss', $image->hashName());

    $assets = assets::create([
        'image'     => $image->hashName(),
        'nama'     => $request->nama,
        'noinv'     => $request->noinv,
        'content'   => $request->konten,
        'kelas'   => $request->kelas,
        'tahun'   => $request->tahun,
        'kondisi'   => $request->kondisi,
        'kantor'   => $request->kantor,
        'gudang'   => $request->gudang,
        'aula'   => $request->aula,
    ]);

    if($assets){
        //redirect dengan pesan sukses
        Alert::success('Sukses', 'Data Berhasil Disimpan!');
        return redirect()->route('assets.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('assets.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

public function show($id)
    {
        $detail = assets::find($id);
        return view('assets.detail', compact('detail'));
    }

public function edit(assets $assets)
{
    return view('assets.edit', compact('assets'));
}


/**
* update
*
* @param  mixed $request
* @param  mixed $assets
* @return void
*/
public function update(Request $request, assets $assets)
{
    $this->validate($request, [
        'nama'     => 'required',
        'noinv'     => 'required',
        'konten'   => 'required',
        'kelas'   => 'required',
        'tahun'   => 'required',
        'kondisi'   => 'required',
        'kantor'   => 'required',
        'gudang'   => 'required',
        'aula'   => 'required',
    ]);

    //get data assets by ID
    $assets = assets::findOrFail($assets->id);

    if($request->file('image') == "") {

        $assets->update([
            'nama'     => $request->nama,
            'noinv'     => $request->noinv,
            'content'   => $request->konten,
            'kelas'   => $request->kelas,
            'tahun'   => $request->tahun,
            'kondisi'   => $request->kondisi,
            'kantor'   => $request->kantor,
            'gudang'   => $request->gudang,
            'aula'   => $request->aula,
        ]);

    } else {

        //hapus old image
        Storage::disk('local')->delete('public/assetss/'.$assets->image);

        //upload new image
        $image = $request->file('image');
        $image->storeAs('public/assetss', $image->hashName());

        $assets->update([
            'image'     => $image->hashName(),
            'nama'     => $request->nama,
            'noinv'     => $request->noinv,
            'kelas'   => $request->kelas,
            'tahun'   => $request->tahun,
            'kondisi'   => $request->kondisi,
            'content'   => $request->konten,
            'kantor'   => $request->kantor,
            'gudang'   => $request->gudang,
            'aula'   => $request->aula,
            
        ]);

    }

    if($assets){
        //redirect dengan pesan sukses
        Alert::success('Sukses', 'Data Berhasil Di Update!');
        //redirect dengan pesan sukses
        return redirect()->route('assets.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('assets.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }
    public function destroy($id)
    {
      $assets = assets::findOrFail($id);
      Storage::disk('local')->delete('public/assetss/'.$assets->image);
      $assets->delete();
    
      if($assets){
          //redirect dengan pesan hapus
        Alert::success('Sukses', 'Data Berhasil Dihapus!');
         //redirect dengan pesan sukses
         return redirect()->route('assets.index')->with(['success' => 'Data Berhasil Dihapus!']);
      }else{
        //redirect dengan pesan error
        return redirect()->route('assets.index')->with(['error' => 'Data Gagal Dihapus!']);
      }
    }
}