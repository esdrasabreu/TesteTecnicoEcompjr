<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Federacao extends Model
{
    use HasFactory;
    protected $table = 'federacao';
    protected $fillable = ['id','nome','estado_id'];

    public function empresa()
    {
        return $this->hasMany(App\Empresa::class,'federacao_id','id');
    }

    public function estado()
    {
        return $this->belongsTo(App\Estado::class,'estado_id','id');
    }
}
