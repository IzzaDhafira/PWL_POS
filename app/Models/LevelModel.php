<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    protected $table = 'm_level'; // Sesuaikan dengan nama tabel level di database
    protected $primaryKey = 'level_id';
    
    // Jika kolom di tabel m_level tidak memiliki created_at dan updated_at
    // public $timestamps = false; 
}