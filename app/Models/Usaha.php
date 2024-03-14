<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Usaha extends Model
{
    use HasFactory;

    protected $table = 'jobs';
    protected $guarded = [''];
    public $incrementing = false;

    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'owner_id');
    }

    public function jenisUsaha()
    {
        return $this->belongsTo(BusinessType::class, 'jenis_usaha_id');
    }
}