<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barangs";
    protected $primarykey = "id";
    protected $fillable = [
        'id' , 'nama_barang' , 'nama' ];

    public function karyawan() {
        return $this->belongsTo(Karyawan::class, 'nama');
    }
}

