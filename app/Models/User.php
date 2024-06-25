<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function tasks()
    {
        return $this->hasMany(Task::class)->orderBy('created_at', 'desc');
    }

    public function filter($id = null, $name = null, $status = null, $dateRange = null)
    {
        return $this->hasMany(Task::class)->where(function($query) use ($id, $name, $status, $dateRange) {
            if ($id) {
                $query->where('id', $id);
            }

            if ($name) {
                $query->where('name', $name);
            }

            if ($status) {
                $query->where('status', $status);
            }

            if ($dateRange) {
                $query->whereBetween('created_at', $dateRange);
            }
        });
    }

    public function sort($collum = 'created_at', $direction = 'asc')
    {
        return $this->hasMany(Task::class)->orderBy($collum, $direction);
    }
}
