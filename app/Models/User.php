<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * UUID sebagai primary key (string, non-incrementing)
     */
    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * Kolom yang boleh diisi (mass assignable)
     */
    protected $fillable = ['name', 'email', 'age'];

    /**
     * Generate UUID saat model dibuat
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    }
}
