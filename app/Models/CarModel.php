<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    /**
     * Get the carbrand that owns the comment.
     */
    public function carbrand()
    {
        return $this->belongsTo(CarBrand::class);
    }
}
