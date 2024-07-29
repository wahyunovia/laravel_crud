@extends('template.app')

@section('content')

<div class="container">
    <h1>Order Detail</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-title">Kode Barang:{{ $orderDetail->kode_barang }}</p>
            <p class="card-text">Nama Barang: {{ $orderDetail->nama_barang }}</p>
            <p class="card-text">Harga:{{ $orderDetail->harga }}</p>
            <p class="card-text">Kuantiti: {{ $orderDetail->kuantiti }}</p>
            <p class="card-text">Tanggal Simpan: {{ $orderDetail->tgl_simpan }}</p>
            <a href="{{ route('order_details.edit', $orderDetail->no_po) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('order_details.destroy', $orderDetail->no_po) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
            <a href="{{ route('order_details.index') }}">Kembali</a>
        </div>
    </div>
</div>

@endsection
