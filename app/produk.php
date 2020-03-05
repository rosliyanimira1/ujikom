<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $fillable = ['Nama_produk', 'Deskripsi', 'id_kategori', 'Slug'];

    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_kode');
    }

    public function scopeFilter(Builder $builder, $request)
    {
        return (new ProdukFilter($request))->filter($builder);
    }
}
