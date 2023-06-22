<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::join('kategoris', 'bukus.id_kategori' , '=', 'kategoris.id')
            ->select('bukus.*', 'kategoris.nama_kategori')
            ->get();
        return view('admin.buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('admin.buku.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'isbn' => 'required|unique:bukus|max:5',
            'judul' => 'required',
            'tahun_terbit' => 'required',
            'penerbit' => 'required',
            'kategori' => 'required',
            'sinopsis' => 'required'
        ]);
        $buku = new Buku;
        $buku->isbn = $validatedData['isbn'];
        $buku->judul = $validatedData['judul'];
        $buku->tahun_terbit = $validatedData['tahun_terbit'];
        $buku->penerbit = $validatedData['penerbit'];
        $buku->id_kategori = $validatedData['kategori'];
        $buku->sinopsis = $validatedData['sinopsis'];
        $buku->save();
        // Buku::create($buku);
        // dd($buku);
        return redirect('/admin/buku')->with('success', 'Data Buku Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $kategoris = Kategori::all();
        return view('/admin/buku/edit', compact('buku','kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $rules = [
            'judul' => 'required',
            'tahun_terbit' => 'required',
            'penerbit' => 'required',
            'id_kategori' => 'required',
            'sinopsis' => 'required'
        ];
        if ($request->isbn != $buku->isbn) {
            $rules['isbn'] = 'required|unique:bukus|max:5';
        }
        $validatedData = $request->validate($rules);
        buku::where('id', $buku->id)
                ->update($validatedData);

        return redirect('/admin/buku')->with('success', 'Data Lapangan Berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        
    }
}
