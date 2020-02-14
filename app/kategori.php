<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public function buku()
    {
        return $this->hasMany('App\Buku', 'kategori_kode');
    }

    // public static function boot()
    // {
    //     parent::boot();
    //     self::deleting(function ($kategori) {
    //         //mengecek apakah kategori masih digunakan oleh buku
    //         if ($kategori->buku->count() > 0) {
    //             //pesan error
    //             Session::flash('error', [
    //                 "level" => "danger",
    //             ]);
    //             return false;
    //         }
    //     });
    // }
}
