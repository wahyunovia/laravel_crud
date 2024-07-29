@extends('template.app')

@section('content')
<div class="container">
    <h1>Daftar Order Detail</h1>
    <a href="{{ route('order_details.create') }}"class="btn btn-primary">Tambah Order Detail</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Kuantiti</th>
                <th>Tanggal Simpan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderDetails as $orderDetail)
                <tr>
                    <td>{{ $orderDetail->kode_barang }}</td>
                    <td>{{ $orderDetail->nama_barang }}</td>
                    <td>{{ $orderDetail->harga }}</td>
                    <td>{{ $orderDetail->kuantiti }}</td>
                    <td>{{ $orderDetail->tgl_simpan }}</td>
                    <td>
                        <a href="{{ route('order_details.show', $orderDetail->no_po) }}"class= "btn btn-info">Lihat</a>
                        <a href="{{ route('order_details.edit', $orderDetail->no_po) }}" class= "btn btn-warning">Edit</a>
                        <form action="{{ route('order_details.destroy', $orderDetail->no_po) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
