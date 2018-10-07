<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dv
 * @package App
 */
class Dv extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'ht', 'tva', 'ttc', 'taxes', 'profit', 'profit_after_taxes', 'selected',
        'sale_id', 'buy_id', 'client_id', 'provider_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sale()
    {
        return $this->belongsTo(Sale::class);
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
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
