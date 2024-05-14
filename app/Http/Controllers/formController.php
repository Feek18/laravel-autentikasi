<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class formController extends Controller
{
    public function form(Request $request)
    {

        return view('formTambah');
    }


    public function store(Request $request){
        $gambarPath = '';

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('public/img');
        }

        $validateData = $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'berat' => 'required',
            'kondisi' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable', 'gambar'
        ]);

        if ($gambarPath !== '') {
            $validateData['gambar'] = $gambarPath;
        }

        Product::create($validateData);

        $product = Product::all(); 

        return redirect()->route('user-table')->with(['users' => $product, 'gambarPath' => $gambarPath]);

    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('formEdit', ['product' => $product]);
    }

    public function update(Request $request, $id){
        if ($request->hasFile('gambar')) {
            if ($request->oldGambar) {
                # code...
                Storage::delete($request->oldGambar);
            }

            $gambarPath = $request->file('gambar')->store('public/img');
        }

        Product::where('id', $id)->update([ 
            'gambar' => $gambarPath,
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'berat' => $request->berat,
            'kondisi' => $request->kondisi,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('user-table');
        
    }

    public function delete(Request $request, $id){
        $user = Product::find($id);
        Storage::delete($user->gambar);
        $user->delete();

        return redirect()->route('user-table');

    }

}
