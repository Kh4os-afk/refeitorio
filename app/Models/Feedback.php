<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $fillable = [
        'rating',
        'comment',
        'codfilial',
    ];

    public function filial(): HasOne
    {
        return $this->hasOne(Branch::class,'id','codfilial');
    }
}
