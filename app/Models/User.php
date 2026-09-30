<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $guarded = ['id'];
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
