<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Engineer extends Authenticatable
{
    use HasFactory, Notifiable;
    
    public $table = "engineer";
    public $primaryKey = "id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'LastName',
        'FirstName',
        'LastNameKana',
        'FirstNameKana',
        'LastNameEnglish',
        'FirstNameEnglish',
        'Sex',
        'Birthday',
        'Country',
        'Municipality',
        'Building',
        'Station',
        'EB',
        'Graduation',
        'GraduationType',
        'School',
        'Department',
        'Position',
        'Experience',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}