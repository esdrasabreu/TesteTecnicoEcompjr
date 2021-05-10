<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $fillable = ['id','nome', 'federacao_id'];

    public function federacao()
    {
        return $this->belongsTo(App\Federacao::class,'federacao_id','id');
    }
}
