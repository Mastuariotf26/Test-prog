@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Produk</h1>
    <hr />
    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Produk Name" value="{{ $produk->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $produk->harga }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection