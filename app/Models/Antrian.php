<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Layanan;
use App\Models\Ambilantrian;
use App\Models\User;
use Cviebrock\EloquentSluggable\Sluggable;

class Antrian extends Model
{
    use HasFactory;
    protected $fillable = ['nama_layanan', 'kode','deskripsi', 'slug', 'persyaratan', 'batas_antrian', 'users_id','layanans_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Ambilantrians()
    {
        return $this->hasMany(Ambilantrian::class);
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_antrian'
            ]
        ];
    }

}
