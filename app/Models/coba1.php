<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coba1 extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_id',
        'user_id',
        'isi',
        'img',
        'slug',
        'isi2',
        'isi3',
    ];

    // protected $guarded = ['id'];
    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search']) ? $filters['search'] : false) {
            return $query->where('isi', 'like', '%' . $filters['search'] . '%');
        }
        // if (request('search')) {
        //     $query->where('isi', 'like', '%' . request('search') . '%');
        // }
    }

    public function jenis()
    {
        return $this->belongsTo(jenis::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function cate()
    {
        return $this->belongsToMany(cate::class);
    }
}
