@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Produk</h1>
    <hr />
    <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama Produk">
            </div>
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection