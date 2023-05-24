<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalkulator extends Model
{
    public static function hitungDosisPupuk($luasLahan, $pola, $jarakTanam1, $jarakTanam2)
    {
        $hasil = 0;
        $dosis = 0.33;

        if ($pola == '3') {
            $jumlahTanaman = ($luasLahan / $jarakTanam1) * ($luasLahan / $jarakTanam2);
            $hasil = $jumlahTanaman * $dosis;
        } elseif ($pola == '5') {
            $jumlahTanaman = ($luasLahan / ($jarakTanam1 + $jarakTanam2)) * 2;
            $hasil = $jumlahTanaman * $dosis;
        } elseif ($pola == '4') {
            $jumlahTanaman = ($luasLahan / ($jarakTanam1 * $jarakTanam2));
            $hasil = $jumlahTanaman * $dosis;
        }

        return $hasil;
    }
}
