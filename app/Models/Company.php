<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'responsible_id',
        'licensed',
    ];

    public function responsible()
    {
        return $this->belongsTo(User::class, 'responsible_id');
    }
}
