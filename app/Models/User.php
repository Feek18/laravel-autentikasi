<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    // Jika Anda menggunakan $fillable, hanya kolom yang tercantum di sini yang dapat diisi secara massal.
    protected $fillable = ['nama', 'email', 'password', 'gender', 'umur', 'tgl_lahir', 'alamat'];

    // Jika Anda menggunakan $guarded, kolom yang tercantum di sini tidak akan diisi secara massal.
    // protected $guarded = [];
}
