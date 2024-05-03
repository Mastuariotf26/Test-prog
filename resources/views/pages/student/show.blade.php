@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail Student</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Student Name" value="{{ $student->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ $student->nim }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $student->jurusan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Angkatan</label>
            <textarea class="form-control" name="angkatan" placeholder="Angkatan" readonly>{{ $student->angkatan }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $student->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $student->updated_at }}" readonly>
        </div>
    </div>
@endsection