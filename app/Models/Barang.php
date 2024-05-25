<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = ['id','nama_barang','harga_barang','stok_barang','id_merek'];
    protected $visible = ['id','nama_barang','harga_barang','stok_barang','id_merek'];
    

    public function Merek()
    {
        return $this->BelongsTo(merek::class,'id_merek');
    }
}
