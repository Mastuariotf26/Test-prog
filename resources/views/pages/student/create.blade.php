@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Student</h1>
    <hr />
    <form action="{{ route('student.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Student Name">
            </div>
            <div class="col">
                <input type="text" name="nim" class="form-control" placeholder="NIM">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
            </div>
            <div class="col">
                <textarea class="form-control" name="angkatan" placeholder="Angkatan"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection