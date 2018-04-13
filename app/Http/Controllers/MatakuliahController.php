<?php

namespace App\Http\Controllers;

use App\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		return view('matakuliah.index', ['data' => Matakuliah::all()]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		return view('matakuliah.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$data = new Matakuliah();
		$data->kode = $request->kode;
		$data->nama = $request->nama;
		$data->sks = $request->sks;
		$data->jam = $request->jam;
		$data->jenis = $request->jenis;
		$data->save();
		return redirect('matakuliah');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
		$matakuliah = Matakuliah::find($id);
		return view('matakuliah.lihat', ['matakuliah' => $matakuliah]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
		$data = Matakuliah::where('id', $id)->get();
		return view('matakuliah.edit', compact('data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
		$data = Matakuliah::where('id', $id)->first();
		$data->kode = $request->kode;
		$data->nama = $request->nama;
		$data->sks = $request->sks;
		$data->jam = $request->jam;
		$data->jenis = $request->jenis;
		$data->save();
		return redirect()->route('matakuliah.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
		$data = Matakuliah::where('id', $id)->first();
		$data->delete();
		return redirect()->route('matakuliah.index');
	}
}
