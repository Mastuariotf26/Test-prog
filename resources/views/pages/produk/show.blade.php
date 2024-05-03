@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Produk</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama Produk" value="{{ $produk->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Harga</label>
            <input type="text" name="harga" class="form-control" placeholder="Harga" value="{{ $produk->harga }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $produk->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $produk->updated_at }}" readonly>
        </div>
    </div>
@endsection