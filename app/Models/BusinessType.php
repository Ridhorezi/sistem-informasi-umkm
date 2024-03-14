<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
    use HasFactory;

    protected $table = 'business_types';
    public $incrementing = false;
    protected $guarded = [''];

    public function usaha()
    {
        return $this->hasOne(Usaha::class, 'jenis_usaha_id');
    }

}