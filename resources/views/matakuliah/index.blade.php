@extends('app')
@section('title','Data Mata Kuliah')
@section('content')
<!-- Bagian Konten -->
    <div class="container">
        <div class="page-header">
            <h1>Data MK</h1>
            <br>
            <a href="matakuliah/create" class="btn btn-sm btn-info">+ Tambah Data</a> |
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Data Mata Kuliah</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
									<th>Kode</th>
									<th>Nama</th>
									<th>Sks</th>
                                    <th>Jam</th>
                                    <th>Jenis</th>
                                    <th>Proses</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                   $no=1;
                                @endphp
                            	@foreach ($data as $items)
                                <tr>
                                    <td>{{ $no++ }}</td>
									<td>{{ $items->kode }}</td>
									<td>{{ $items->nama }}</td>
									<td>{{ $items->sks }}</td>
                                    <td>{{ $items->jam }}</td>
                                    <td>{{ $items->jenis }}</td>
                                    <td>
                                        <form action="{{ route('matakuliah.destroy', $items->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="matakuliah/{{ $items->id }}" class=" btn btn-sm btn-primary">Lihat</a>
                                        <a href="{{ route('matakuliah.edit',$items->id) }}" class=" btn btn-sm btn-warning">Edit</a>
                                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
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
@endsection