@extends('layouts.app_modern')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Pendaftaran</div>
                <div class="card-body">
                    <a href="/daftar/create" class="btn btn-primary btn-sm mt-3">
                        Tambah Data
                    </a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Daftar</th>
                                <th>Poli</th>
                                <th>Keluhan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->pasien->nama }}</td>
                                <td>{{ $item->pasien->jenis_kelamin }}</td>
                                <td>{{ $item->tanggal_daftar }}</td>
                                <td>{{ $item->poli->nama }}</td>
                                <td>{{ $item->keluhan }}</td>
                                <td>
                                    <a href="/daftar/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                                    <form action="/daftar/{{ $item->id }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm ml-2" oneclick="return comfirm('yakin ingin menghapus data?')">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
