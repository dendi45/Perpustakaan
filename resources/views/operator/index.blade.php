@extends('Layout.app')
@section('title', 'Buku saya')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="{{ url('/operator/create') }}" class="btn btn-md btn-primary my-2">Tambah Data</a>

            </div>
        </div>
        <div class="row">
            <div class="card p-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Operator
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Jenis Kelamin</th>
                            <th>Aksi</th>

                        </tr>
                        </thead>
                        <tbody>
                            @foreach($operator as $op)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $op->nama }}</td>
                                <td>{{ $op->jabatan }}</td>
                                <td>{{ $op->Jenis_kelamin }}</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-md text-white">Edit</a>
                                    <a href="#" class="btn btn-danger btn-md">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection