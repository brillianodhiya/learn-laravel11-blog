<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    //
    use HasFactory;

    // Tentukan nama kolom primary key
    protected $primaryKey = 'id_artikel';

    // Jika kolom primary key bukan integer, Anda juga bisa menambahkan ini
    // protected $keyType = 'string'; // jika id_artikel adalah string

    // Jika kolom primary key tidak auto-increment
    // public $incrementing = false;

    // Definisikan kolom lain yang bisa diisi

    protected $fillable = [
        'banner',
        'title',
        'body',
        'published_at',
        'status',
        'user_id',
    ];
}
