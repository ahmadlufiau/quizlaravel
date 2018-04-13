@extends('app')

@section('title','Data Mata Kuliah '.$matakuliah->nama)

@section('content')
<div class="container">
	<h1>Data MK {{ $matakuliah->name }}</h1>
	<table class="table table-bordered table-striped">
		<tbody>
			<tr>
				<td>Kode</td>
				<td>{{ $matakuliah->kode }}</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>{{ $matakuliah->nama }}</td>
			</tr>
			<tr>
				<td>Sks</td>
				<td>{{ $matakuliah->sks }}</td>
			</tr>
			<tr>
				<td>Jam</td>
				<td>{{ $matakuliah->jam }}</td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td>{{ $matakuliah->jenis }}</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection