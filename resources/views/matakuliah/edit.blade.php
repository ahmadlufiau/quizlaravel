@extends('app')

@section('title','Tambah Data')

@section('content')
<div class="container">
    <h1>Edit</h1>

    @foreach($data as $datas)
    <form action="{{ route('matakuliah.update', $datas->id) }}" method="post" class="col-md-6">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <label>Kode:</label>
    <input type="text" name="kode" value="{{ $datas->kode }}" class="form-control">
    <label>Nama:</label>
    <input type="text" name="nama" value="{{ $datas->nama }}" class="form-control">
    <label>SKS:</label>
    <input type="text" name="sks" value="{{ $datas->sks }}" class="form-control">
    <label>Jam:</label>
    <input type="text" name="jam" value="{{ $datas->jam }}" class="form-control">
    <label>Jenis:</label>
    <select name="jenis" class="form-control">
        <option value="T">Teori</option>
        <option value="P">Praktek</option>
        <option value="TP">Teori dan Praktek</option>
    </select>
    <button type="submit" class="btn btn-info">Submit</button>
    <button type="reset" class="btn btn-danger">Cancel</button

    </form>
    @endforeach
</div>
@endsection