@extends('template.app')

@section('content')
    <h1>Tambah Supplier</h1>
    <form action="{{ route('suppliers.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama_supplier">Nama Supplier:</label>
            <input type="text" id="nama_supplier" name="nama_supplier">
        </div>
        <div>
            <label for="telepon">Telepon:</label>
            <input type="text" id="telepon" name="telepon">
        </div>
        <div>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat"></textarea>
        </div>
        <button type="submit">Tambah</button>
    </form>
@endsection
