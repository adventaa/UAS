<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class AdminBorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjamans = Peminjaman::join('users', 'peminjaman.id_user' , '=', 'users.id')
            ->join('bukus', 'peminjaman.id_buku' , '=', 'bukus.id')
            ->select('peminjaman.*', 'users.name','users.email' , 'bukus.judul')
            ->get();
        // dd($peminjamans);
        return view('admin/peminjaman/index', compact('peminjamans'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        $pinjam = Peminjaman::find($id);
        if (!$pinjam) {
            return redirect()->back()->with('error', 'Data penyewaan tidak ditemukan.');
        }

        $buku = Buku::find($pinjam->id_buku);
        if (!$buku) {
            return redirect()->back()->with('error', 'Data buku tidak ditemukan.');
        }

        $pinjam->status = 'Sudah Kembali';
        $pinjam->save();
        $buku->status = 'Tersedia';
        $buku->save();

        return redirect('/admin/buku')->with('success', 'Buku Telah Dikemalikan Lunas!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
