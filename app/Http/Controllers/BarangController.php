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
        $listbarang = produk::all();

        return view('barang.index', compact('listbarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $pageTitle = 'Create Produk';

        return view('barang.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaproduk' => 'required',
            'deskripsiproduk' => 'required',
            'status' => 'required',
            'fotoproduk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Process the file upload
        if ($request->hasFile('fotoproduk')) {
            $file = $request->file('fotoproduk');
            $filename = $request->namaproduk . '.' . $file->getClientOriginalExtension();
            $filePath = $file->storeAs('fotoProduk', $filename, 'public');
        }

        // Create the product
        $product = new Produk;
        $product->namaproduk = $request->namaproduk;
        $product->deskripsiproduk = $request->deskripsiproduk;
        $product->status = $request->status;
        $product->fotoproduk = $filename ?? null; // Set the filename if uploaded, otherwise null
        $product->save();

        return redirect()->route('barangg.index')->with('success', 'Product created successfully.');
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
        // dd($request);
        $request->validate([
            'namaproduk' => 'required',
            'deskripsiproduk' => 'required',
            'status' => 'required',
            // 'fotoproduk' => 'required',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect("/barangg")->with('success', 'Produk updated successfully.');
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
