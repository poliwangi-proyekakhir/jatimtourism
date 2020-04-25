<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    //
	 protected $table = "pengguna"; // tambahkan baris ini dan isi value dengan nama tabel yang dibuat
	 protected $fillable = ['id','nama','jenis_kelamin','alamat','phone','email'];
}
