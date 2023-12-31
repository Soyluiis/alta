<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use App\Models\AgenciaCarga;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function agenciaCargas()
{
    return $this->hasMany(AgenciaCarga::class);
}
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'folio', 'password', 'email','role', 'used_folio','fecha_vencimiento', 'folio_usos','capturador',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $attributes = [
        'email' => null,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function isAdmin()
    {
        return $this->roles->contains('id', 1);
    }


    public function agenciaCarga()
{
    return $this->hasOne(AgenciaCarga::class, 'usuario_id', 'name');
}

public function createdBy()
{
    return $this->belongsTo(User::class, 'id');
}

}
