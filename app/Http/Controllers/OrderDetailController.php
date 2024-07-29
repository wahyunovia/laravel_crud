<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderDetails = OrderDetail::all();
        return view('order_details.index', compact('orderDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('order_details.create');
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
            'kode_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:150',
            'harga' => 'required|integer',
            'kuantiti' => 'required|integer',
            'tgl_simpan' => 'required|date',
        ]);

        OrderDetail::create($request->all());
        return redirect()->route('order_details.index')->with('success', 'Order Detail berhasil dibuat.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(OrderDetail $orderDetail)
    {
        return view('order_details.show', compact('orderDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDetail $orderDetail)
    {
        return view('order_details.edit', compact('orderDetail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderDetail $orderDetail)
    {
        $request->validate([
            'kode_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:150',
            'harga' => 'required|integer',
            'kuantiti' => 'required|integer',
            'tgl_simpan' => 'required|date',
        ]);

        $orderDetail->update($request->all());
        return redirect()->route('order_details.index')->with('success', 'Order Detail berhasil diperbarui.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderDetail $orderDetail)
    {
        $orderDetail->delete();
        return redirect()->route('order_details.index')->with('success', 'Order Detail berhasil dihapus.');
    }
}
