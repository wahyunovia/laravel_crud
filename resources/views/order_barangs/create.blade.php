@extends('template.app')

@section('content')
    <h1>Tambah Order Barang</h1>
    <form action="{{ route('order_barangs.store') }}" method="POST">
        @csrf
        <div>
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal">
        </div>
        <div>
            <label for="kode_supplier">Kode Supplier:</label>
            <input type="number" id="kode_supplier" name="kode_supplier">
        </div>
        <div>
            <label for="PPN">PPN:</label>
            <input type="number" id="PPN" name="PPN">
        </div>
        <button type="submit">Tambah</button>
    </form>
@endsection
