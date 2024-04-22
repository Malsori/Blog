<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class follow extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function creator()
    {
        return $this->belongsTo(User::class, 'sent_by');
    }
}
