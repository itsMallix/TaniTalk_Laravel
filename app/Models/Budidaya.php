<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budidaya extends Model
{
    use HasFactory;
    protected $table = 'tabel_budidaya';
    protected $fillable = [
        'nama_budidaya',
        'jenis_budidaya',
        'deskripsi'
    ];
    public $timestamp = false;
}
