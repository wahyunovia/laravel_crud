@extends('template.app')

@section('content')
<div class="container">
    <h1>Detail Order Barang</h1>
    <div class="card">
        <div class="card-body">
        <p class="card-text">Tanggal: {{ $orderBarang->tanggal }}</p>
        <p class="card-text">kode Supplier:{{ $orderBarang->kode_supplier }}</p>
        <p class="card-text">PPN:  {{ $orderBarang->PPN }} </p>
        <a href="{{ route('order_barangs.edit', $orderBarang->no_po) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('order_barangs.destroy', $orderBarang->no_po) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        </div>
    </div>
</div>
    @endsection
