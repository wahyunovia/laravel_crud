<?php

namespace App\Http\Controllers;

use App\Models\OrderBarang;
use Illuminate\Http\Request;

class OrderBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderBarangs = OrderBarang::all();
       return view('order_barangs.index', compact('orderBarangs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order_barangs.create');
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
            'tanggal' => 'required|date',
            'kode_supplier' => 'required|integer',
            'PPN' => 'required|integer',
        ]);

        OrderBarang::create($request->all());
        return redirect()->route('order_barangs.index')->with('success', 'Order Barang berhasil dibuat.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(OrderBarang $orderBarang)
    {
        return view('order_barangs.show', compact('orderBarang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderBarang $orderBarang)
    {
        return view('order_barangs.edit', compact('orderBarang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderBarang $orderBarang)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'kode_supplier' => 'required|integer',
            'PPN' => 'required|integer',
        ]);

        $orderBarang->update($request->all());
        return redirect()->route('order_barangs.index')->with('success', 'Order Barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderBarang $orderBarang)
    {
        $orderBarang->delete();
        return redirect()->route('order_barangs.index')->with('success', 'Order Barang berhasil dihapus.');
    }
}
