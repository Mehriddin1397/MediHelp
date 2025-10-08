<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DoctorProfile extends Model
{
    protected $fillable = [
        'user_id', 'specialty_id', 'avatar_path', 'bio',
        'workplace', 'experience_years', 'social_links', 'is_verified'
    ];

    protected $casts = [
        'social_links' => 'array',
        'is_verified' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
}

