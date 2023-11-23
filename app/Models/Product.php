<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'product';
    
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_produk',
        'deskripsi_produk',
        'harga_produk',
        'gambar_produk',
        'id_kategori_produk',
        'id_criteria',
        'id_brand',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_kategori_produk');
    }

    public function criteria()
    {
        return $this->belongsTo(Criteria::class, 'id_criteria');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }

}
