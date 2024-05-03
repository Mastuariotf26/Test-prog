@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Produk</h1>
        <a href="{{ route('produk.create') }}" class="btn btn-primary">Add Produk</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @if($produks->count() > 0)
                @foreach($produks as $produk)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $produk->nama }}</td>
                        <td class="align-middle">{{ $produk->harga }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('produk.show', $produk->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('produk.edit', $produk->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else 
                <tr>
                    <td class="text-center" colspan="5">Produk not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection