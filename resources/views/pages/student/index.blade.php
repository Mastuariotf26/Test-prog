@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Student</h1>
        <a href="{{ route('student.create') }}" class="btn btn-primary">Add Student</a>
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
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
            </tr>
        </thead>
        <tbody>
            @if($students->count() > 0)
                @foreach($students as $student)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $student->nama }}</td>
                        <td class="align-middle">{{ $student->nim }}</td>
                        <td class="align-middle">{{ $student->jurusan }}</td>
                        <td class="align-middle">{{ $student->angkatan }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('student.show', $student->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('student.edit', $student->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('student.destroy', $student->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Student not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection