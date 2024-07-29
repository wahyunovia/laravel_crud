@extends('template.app')

@section('content')
<div class="container">
    <h1>Edit Order Detail</h1>
    <form action="{{ route('order_details.update', $orderDetail->no_po) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_barang">Kode Barang:</label>
            <input type="number" class="form-control" id="kode_barang" name="kode_barang" value="{{ $orderDetail->kode_barang }}"required>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $orderDetail->nama_barang }}"required>
        </div>
        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $orderDetail->harga }}"required>
        </div>
        <div class="form-group">
            <label for="kuantiti">Kuantiti:</label>
            <input type="number" class="form-control" id="kuantiti" name="kuantiti" value="{{ $orderDetail->kuantiti }}"required>
        </div>
        <div class="form-group">
            <label for="tgl_simpan">Tanggal Simpan:</label>
            <input type="date" class="form-control" id="tgl_simpan" name="tgl_simpan" value="{{ $orderDetail->tgl_simpan }}"required>
        </div>
        <button type="submit"  class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
