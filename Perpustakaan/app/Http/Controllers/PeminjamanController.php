<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Buku;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePeminjamanRequest;
use App\Http\Requests\UpdatePeminjamanRequest;


class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::join('bukus', 'peminjaman.id_buku', '=', 'bukus.id')
            ->where('peminjaman.id_user', Auth::id())
            ->get();
        $title = "Peminjaman";
        return view('peminjaman.index', compact('peminjaman', 'title'));
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
    public function store(StorePeminjamanRequest $request)
    {
        $data = $request->validated();
        $data['id_buku'] = $request->input('id_buku');
        $data['id_user'] = Auth::id(); 
        $data['tanggal_pinjam'] = Carbon::now()->toDateString();
        $data['tanggal_kembali'] = Carbon::now()->addDays(14)->toDateString();
        
        // Create the data
        Peminjaman::create($data);

        $buku = Buku::find($data['id_buku']);

        // Ubah status buku menjadi "Tidak Tersedia"
        $buku->status = 'Tidak Tersedia';
        $buku->save();

        // Redirect to desired page
        return redirect("/peminjaman")->with('pesan', 'Peminjaman berhasil dilakukan!');
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
    public function update(UpdatePeminjamanRequest $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }
}
