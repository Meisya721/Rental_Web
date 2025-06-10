<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;
    
    protected $table = 'sewas';
    
    protected $fillable = [
        'product_id',
        'user_id',
        'nama_penyewa',
        'tanggal_sewa',
        'tanggal_kembali',
        'total_price',
        'payment_method',
        'jumlah_bayar',
        'status',
        'status_barang'
    ];
    
    // Relasi ke product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}