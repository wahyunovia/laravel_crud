@extends('template.app')

@section('content')
    <h1>Edit Supplier</h1>
    <form action="{{ route('suppliers.update', $supplier->kode_supplier) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_supplier">Nama Supplier:</label>
            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ $supplier->nama_supplier }}">
        </div class="form-group">
        <div>
            <label for="telepon">Telepon:</label>
            <input type="text" class="form-control" id="telepon" name="telepon" value="{{ $supplier->telepon }}">
        </div class="form-group">
        <div>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" class="form-control" name="alamat">{{ $supplier->alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
