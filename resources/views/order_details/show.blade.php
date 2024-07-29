@extends('template.app')

@section('content')
    <h1>Detail Order Detail</h1>
    <div>
        <strong>Kode Barang:</strong> {{ $orderDetail->kode_barang }}
    </div>
    <div>
        <strong>Nama Barang:</strong> {{ $orderDetail->nama_barang }}
    </div>
    <div>
        <strong>Harga:</strong> {{ $orderDetail->harga }}
    </div>
    <div>
        <strong>Kuantiti:</strong> {{ $orderDetail->kuantiti }}
    </div>
    <div>
        <strong>Tanggal Simpan:</strong> {{ $orderDetail->tgl_simpan }}
    </div>
    <a href="{{ route('order_details.index') }}">Kembali</a>
@endsection
