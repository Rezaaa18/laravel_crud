<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    protected $fillable = ['id_merek','nama_merek'];
    protected $visible = ['id_merek','nama_merek'];

    public function Merek()
    {
        return $this->hasMany(merek::class,'id_merek');
    }

}
