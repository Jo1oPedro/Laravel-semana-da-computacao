<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Core extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the users of the core
     * 
     */
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }    
}
