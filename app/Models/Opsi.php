<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opsi extends Model
{
    use HasFactory;
    protected $table = 'opsi';
    protected $fillable = [
        'pertanyaan_id',
        'opsi1',
        'opsi2',
        'opsi3',
        'opsi4',
        'jawaban',
    ];

    public function getPertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'pertanyaan_id', 'id');
    }
}
