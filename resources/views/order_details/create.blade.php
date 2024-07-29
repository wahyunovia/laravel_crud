@extends('template.app')

@section('content')
    <h1>Tambah Order Detail</h1>
    <form action="{{ route('order_details.store') }}" method="POST">
        @csrf
        <div>
            <label for="kode_barang">Kode Barang:</label>
            <input type="number" id="kode_barang" name="kode_barang">
        </div>
        <div>
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang">
        </div>
        <div>
            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga">
        </div>
        <div>
            <label for="kuantiti">Kuantiti:</label>
            <input type="number" id="kuantiti" name="kuantiti">
        </div>
        <div>
            <label for="tgl_simpan">Tanggal Simpan:</label>
            <input type="date" id="tgl_simpan" name="tgl_simpan">
        </div>
        <button type="submit">Tambah</button>
    </form>
@endsection
