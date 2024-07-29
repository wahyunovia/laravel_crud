@extends('template.app')

@section('content')
    <h1>Detail Supplier</h1>
    <div>
        <strong>Nama Supplier:</strong> {{ $supplier->nama_supplier }}
    </div>
    <div>
        <strong>Telepon:</strong> {{ $supplier->telepon }}
    </div>
    <div>
        <strong>Alamat:</strong> {{ $supplier->alamat }}
    </div>
    <a href="{{ route('suppliers.index') }}">Kembali</a>
@endsection
