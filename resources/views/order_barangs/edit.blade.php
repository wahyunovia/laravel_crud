@extends('template.app')

@section('content')
<div class="container">
    <h1>Edit Order Barang</h1>
    <form action="{{ route('order_barangs.update', $orderBarang->no_po) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" class="form-control"  id="tanggal" name="tanggal" value="{{ $orderBarang->tanggal }}"required>
        </div>
        <div class="form-group">
            <label for="kode_supplier">Kode Supplier:</label>
            <input type="number" class="form-control"  id="kode_supplier" name="kode_supplier" value="{{ $orderBarang->kode_supplier }}"required>
        </div >
        <div class="form-group">
            <label for="PPN">PPN:</label>
            <input type="number" class="form-control"  id="PPN" name="PPN" value="{{ $orderBarang->PPN }}"required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
