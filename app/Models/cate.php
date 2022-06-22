<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cate extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function coba1()
    {
        return $this->belongsToMany(coba1::class);
    }
}
