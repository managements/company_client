<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Trade
 * @package App
 */
class Trade extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['ht', 'tva', 'ttc', 'profit', 'taxes', 'profit_after_taxes', 'company_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function buys()
    {
        return $this->hasMany(Buy::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Accountings()
    {
        return $this->hasMany(Accounting::class);
    }
}
