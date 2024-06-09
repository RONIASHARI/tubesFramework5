<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $pageTitle = 'Barang List';
        $listbarang= produk::all();

        return view('barang.index', compact('listbarang'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('produks.create');
=======
        $pageTitle = 'Create Employee';

        return view('barang.create', compact('pageTitle'));
>>>>>>> c456507db966a0780a179efc86af783434042460
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'namaproduk' => 'required',
            'deskripsiproduk' => 'required',
            'status' => 'required',
            'fotoproduk' => 'required',
        ]);

        Produk::create($request->all());

        return redirect()->route('produks.index')->with('success', 'Produk created successfully.');
=======
       
    $messages = [
        'required' => ':Attribute harus diisi.',
        'numeric' => 'Isi :attribute dengan angka'
    ];

    $validator = Validator::make($request->all(), [
        'NamaBarang' => 'required',
        'KodeBarang' => 'required',
        'JumlahBarang' => 'numeric',
        'DeskripsiBarang' => 'required',
    ], $messages);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
>>>>>>> c456507db966a0780a179efc86af783434042460
    }

    return $request->all();
}

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produks.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produks.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'namaproduk' => 'required',
            'deskripsiproduk' => 'required',
            'status' => 'required',
            'fotoproduk' => 'required',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('produks.index')->with('success', 'Produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect("/barangg")->with('success', 'Produk deleted successfully.');
    }
}
