<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class AdminData extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'image',
    ];
    protected $touches = ['users'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
