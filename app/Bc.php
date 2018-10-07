<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bc
 * @package App
 */
class Bc extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['qt', 'product_id', 'buy_id', 'sale_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function buy()
    {
        return $this->belongsTo(Buy::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }
}
