@extends('template.app')

@section('content')
    <h1>Edit Supplier</h1>
    <form action="{{ route('suppliers.update', $supplier->kode_supplier) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nama_supplier">Nama Supplier:</label>
            <input type="text" id="nama_supplier" name="nama_supplier" value="{{ $supplier->nama_supplier }}">
        </div>
        <div>
            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon" value="{{ $supplier->telepon }}">
        </div>
        <div>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat">{{ $supplier->alamat }}</textarea>
        </div>
        <button type="submit">Perbarui</button>
    </form>
@endsection
