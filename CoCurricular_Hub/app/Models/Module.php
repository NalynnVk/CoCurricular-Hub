<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'venue',
        'schedule',
        // Add other fields as needed
    ];

    public function enrolledUsers()
    {
        return $this->belongsToMany(User::class, 'user_module', 'module_id', 'user_id')->withTimestamps();
    }
}
