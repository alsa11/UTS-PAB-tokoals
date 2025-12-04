<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model implements \Spatie\MediaLibrary\HasMedia
{  
    use \Spatie\MediaLibrary\InteractsWithMedia;

    protected $fillable = [
        'product_name',
        'product_code',
        'price',
        'tanggal_masuk',
        'quantity',
        'product_description_short',
        'product_description_long',
    ];

    public function categories(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }
}
