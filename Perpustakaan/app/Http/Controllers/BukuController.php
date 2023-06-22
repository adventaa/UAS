<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use Illuminate\Http\Request;


class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $bukus = Buku::all();
        $kategoris = Kategori::all();
        return view('books.index', compact('bukus', 'kategoris'));

    }

    public function searchByCategory($id_kategori)
    {
        // Get the books that belong to the selected category
        $bukus = Buku::where('id_kategori', $id_kategori)->get();
        $kategoris = Kategori::all();
        // Pass the books to the view or perform any other necessary operations
        return view('books.index', compact('bukus','kategoris'));
    }
    public function searchBuku(Request $request)
    {
        
        $search = $request->input('search');
        // dd($search);
        // Get the books that match the search query
        $bukus = Buku::where('judul', 'like', "$search")->get();
        $kategoris = Kategori::all();
        
        // Pass the books to the view or perform any other necessary operations
        return view('books.index', compact('bukus', 'kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBukuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        //
    }
}
