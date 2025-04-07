<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    /** @use HasFactory<\Database\Factories\NotaFactory> */
    use HasFactory;

    protected $fillable = ['alumno_id', 'ccee_id', 'nota'];

    public function alumno(){
        return $this->belongsTo(Alumno::class);
    }

    public function ccee(){
        return $this->belongsTo(Ccee::class);
    }
}
