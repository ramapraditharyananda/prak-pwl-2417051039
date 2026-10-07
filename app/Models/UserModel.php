<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'users';

    protected $guarded = ['id'];

    public $incrementing = false;

    protected $keyType = 'string';

    public function getUser()
    {
        return $this->join('kelas', 'users.kelas_id', '=', 'kelas.id')
            ->select(
                'users.id',
                'users.nama',
                'users.nim',
                'users.kelas_id',
                'kelas.nama_kelas'
            )
            ->get();
    }
}