@extends('template.app')

@section('content')

<div class="container">
    <h1>Detail Supplier</h1>
    <div class="card">
        <div class="card-body">
            <p class="card-text">Nama Supplier:  {{ $supplier->nama_supplier }}</p>
            <p class="card-text">No Telefon:  {{ $supplier->telepon }}</p>
            <p class="card-text">Alamat:  {{ $supplier->alamat }}</p>
            <a href="{{ route('suppliers.edit', $supplier->kode_supplier) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('suppliers.destroy', $supplier->kode_supplier) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="{{ route('suppliers.index') }}">Kembali</a>
            </form>
        </div>
    </div>
</div>
@endsection
