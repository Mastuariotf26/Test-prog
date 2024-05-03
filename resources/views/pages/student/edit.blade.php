@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Student</h1>
    <hr />
    <form action="{{ route('student.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Student Name" value="{{ $student->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ $student->nim }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $student->jurusan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Angkatan</label>
                <textarea class="form-control" name="angkatan" placeholder="Descriptoin" >{{ $student->angkatan }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection