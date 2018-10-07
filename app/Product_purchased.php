<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product_purchased
 * @package App
 */
class Product_purchased extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['pu', 'qt', 'ht', 'tva', 'ttc', 'product_id', 'order_id', 'accounting_id'];

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
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accounting()
    {
        return $this->belongsTo(Accounting::class);
    }
}
