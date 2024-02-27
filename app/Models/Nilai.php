<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    // Mendefinisikan tabel yang terkait dengan model
    protected $table = 'nilai';

    // Atribut yang bisa diisi
    protected $fillable = ['partisipasi', 'tugas', 'uts', 'uas'];
}
