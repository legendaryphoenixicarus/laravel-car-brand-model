<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'car_brand_id'];

    /**
     * Get the carmodels for the blog post.
     */
    public function car_models()
    {
        return $this->hasMany(CarModel::class);
    }
}
