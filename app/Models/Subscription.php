<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'email', 'status', 'verification_status', 'verification_date', 'tag',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
