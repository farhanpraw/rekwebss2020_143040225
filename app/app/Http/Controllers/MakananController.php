<?php

namespace App\Http\Controllers;

use App\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $makanan = Makanan::all();
        return view('makanan.index', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        //
        if ($request->name != null) {
            $makanan = Makanan::where('Nama', 'LIKE', '%' . $request->name . '%')->orderBy('ID')->get();
        } else {
            $makanan = Makanan::all();
        }
        return view('makanan.index', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('makanan.create');
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
        $request->validate([
            'Nama' => 'required',
            'Jenis' => 'required',
            'Rating' => 'required',
            'Deskripsi' => 'required',
            'Gambar' => 'required',
            'Ulasan' => 'required',
            'Rekomendasi' => 'required',
            'Promo' => 'required',
            'Harga' => 'required',
        ]);

        if ($request->hasfile('Gambar')) {
            $file = $request->file('Gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('assets/img/makanan/', $filename);
        }

        Makanan::create([
            'Nama' => $request->Nama,
            'Jenis' => $request->Jenis,
            'Rating' => $request->Rating,
            'Deskripsi' => $request->Deskripsi,
            'Gambar' => $filename,
            'Ulasan' => $request->Ulasan,
            'Rekomendasi' => $request->Rekomendasi,
            'Promo' => $request->Promo,
            'Harga' => $request->Harga,
        ]);
        return redirect('/makanan')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function show(Makanan $makanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Makanan $makanan)
    {
        //
        return view('makanan.edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Makanan $makanan)
    {
        //
        $request->validate([
            'Nama' => 'required',
            'Jenis' => 'required',
            'Rating' => 'required',
            'Deskripsi' => 'required',
            'Gambar' => 'required',
            'Ulasan' => 'required',
            'Rekomendasi' => 'required',
            'Promo' => 'required',
            'Harga' => 'required',
        ]);

        if ($request->hasfile('Gambar')) {
            $file = $request->file('Gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('assets/img/makanan/', $filename);
        }

        Makanan::where('id', $makanan->ID)->update([
            'Nama' => $request->Nama,
            'Jenis' => $request->Jenis,
            'Rating' => $request->Rating,
            'Deskripsi' => $request->Deskripsi,
            'Gambar' => $filename,
            'Ulasan' => $request->Ulasan,
            'Rekomendasi' => $request->Rekomendasi,
            'Promo' => $request->Promo,
            'Harga' => $request->Harga,
        ]);
        return redirect('/makanan')->with('status', 'Data makanan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Makanan  $makanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Makanan $makanan)
    {
        //
        Makanan::destroy($makanan->ID);
        return redirect('/makanan')->with('status', 'Data makanan berhasil dihapus');
    }
}
