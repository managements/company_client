<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 * @package App
 */
class Sale extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['slug', 'trade_action_id', 'trade_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bcs()
    {
        return $this->hasMany(Bc::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trade_action()
    {
        return $this->belongsTo(TradeAction::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trade()
    {
        return $this->belongsTo(Trade::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function dv()
    {
        return $this->hasOne(Dv::class);
    }
}
