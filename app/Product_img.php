<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product_img
 * @package App
 */
class Product_img extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['img', 'product_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
