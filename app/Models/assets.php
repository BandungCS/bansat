<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assets extends Model
{
    use HasFactory;

    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'image', 'nama', 'noinv', 'kelas', 'tahun', 'kantor', 'gudang','aula', 'kondisi', 'content'
    ];
}
