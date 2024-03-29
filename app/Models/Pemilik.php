<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Pemilik extends Model
{
    use HasFactory;

    protected $table = 'owners';
    public $incrementing = false;
    protected $guarded = [''];

    public function usaha()
    {
        return $this->hasOne(Usaha::class, 'owner_id');
    }
}