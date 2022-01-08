<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table = 'restaurant';
    protected $primarykey = 'id';
    
    protected $fillable = [
        'restaurant_image',
        'restaurant_name',
        'operational_day',
        'operational_time',
        'restaurant_type',
        'restaurant_location'
    ];

    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    
}
