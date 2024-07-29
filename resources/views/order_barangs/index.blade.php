@extends('template.app')

@section('content')
<div class="container">
    <h1>Daftar Order Barang</h1>
    <a href="{{ route('order_barangs.create') }}" class="btn btn-primary">Tambah Order Barang</a>
    
    <table  class="table">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Kode Supplier</th>
                <th>PPN</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderBarangs as $orderBarang)
                <tr>
                    <td>{{ $orderBarang->tanggal }}</td>
                    <td>{{ $orderBarang->kode_supplier }}</td>
                    <td>{{ $orderBarang->PPN }}</td>
                    <td>
                        <a href="{{ route('order_barangs.show', $orderBarang->no_po) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('order_barangs.edit', $orderBarang->no_po) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('order_barangs.destroy', $orderBarang->no_po) }}"method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit"class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
