@extends('app')

@section('title','Tambah Data')

@section('content')
<div class="container">
	<h1>Tambah Data</h1>

	<form action="{{ route('matakuliah.store') }}" method="post" class="col-md-6">
    {{ csrf_field() }}
    <label>Kode:</label>
	<input type="text" name="kode" value="" class="form-control">
	<label>Nama:</label>
	<input type="text" name="nama" value="" class="form-control">
	<label>SKS:</label>
	<input type="text" name="sks" value="" class="form-control">
	<label>Jam:</label>
	<input type="text" name="jam" value="" class="form-control">
	<label>Jenis:</label>
	<select name="jenis" class="form-control">
		<option value="T">Teori</option>
		<option value="P">Praktek</option>
		<option value="TP">Teori dan Praktek</option>
	</select>
	<br>
	<button type="submit" class="btn btn-info">Submit</button>
	<button type="reset" class="btn btn-danger">Cancel</button
	</form>

</div>
@endsection