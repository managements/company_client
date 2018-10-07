<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Accounting
 * @package App
 */
class Accounting extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['ht', 'tva', 'ttc', 'profit', 'taxes', 'profit_after_taxes', 'taxes_after_unload', 'month','trade_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product_purchaseds()
    {
        return $this->hasMany(Product_purchased::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product_solds()
    {
        return $this->hasMany(Product_sold::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trade()
    {
        return $this->belongsTo(Trade::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unloads()
    {
        return $this->hasMany(Unload::class);
    }
}
