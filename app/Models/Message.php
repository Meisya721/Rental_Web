<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    
    // Sesuaikan dengan nama tabel di database
    protected $table = 'messages';
    
    // Sesuaikan dengan field yang ada di form
    protected $fillable = ['nama', 'email', 'subject', 'pesan'];
}