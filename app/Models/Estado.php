<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    use HasFactory;
    protected $table = 'estado';
    protected $fillable = ['id','nome'];

    public function federacao()
    {
        return $this->hasMany(App\Estado::class,'estado_id','id');
    }
    
}
