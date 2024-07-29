@extends('template.app')

@section('content')
<div class="container">
    <h1>Edit Order Detail</h1>
    <form action="{{ route('order_details.update', $orderDetail->no_po) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="kode_barang">Kode Barang:</label>
            <input type="number" id="kode_barang" name="kode_barang" value="{{ $orderDetail->kode_barang }}">
        </div>
        <div>
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" value="{{ $orderDetail->nama_barang }}">
        </div>
        <div>
            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" value="{{ $orderDetail->harga }}">
        </div>
        <div>
            <label for="kuantiti">Kuantiti:</label>
            <input type="number" id="kuantiti" name="kuantiti" value="{{ $orderDetail->kuantiti }}">
        </div>
        <div>
            <label for="tgl_simpan">Tanggal Simpan:</label>
            <input type="date" id="tgl_simpan" name="tgl_simpan" value="{{ $orderDetail->tgl_simpan }}">
        </div>
        <button type="submit">Perbarui</button>
    </form>
</div>
@endsection
