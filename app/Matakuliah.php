<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model {

	// menghubungkan tabel mk
	protected $table = 'matakuliah';

	// menyimpan data tanpa timestamps(created_at, updated_at, delete_at)
	public $timestamps = false;
}