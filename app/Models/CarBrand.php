<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    use HasFactory;

    /**
     * Get the carmodels for the blog post.
     */
    public function carmodels()
    {
        return $this->hasMany(CarModel::class);
    }
}
