<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * @package App
 */
class Order extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['pu', 'qt', 'ht', 'tva', 'ttc', 'taxes', 'profit', 'profit_after_taxes', 'dv_id', 'product_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dv()
    {
        return $this->belongsTo(Dv::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product_purchased()
    {
        return $this->hasOne(Product_purchased::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product_sold()
    {
        return $this->hasOne(Product_sold::class);
    }
}
