<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;

    protected $fillable = ['nama band', 'genre', 'email', 'no_telp'];

    public static function litest()
    {
        // Your method logic here
        return self::query();
    }
}

// Di dalam model Band (Band.php)

// {
//     // Mendefinisikan metode scope kustom
//     public function scopeLitest($query)
//     {
//         return $query->orderBy('nama band', 'genre', 'email', 'no_telp'); // Sesuaikan ini sesuai kebutuhan
//     }
// }
