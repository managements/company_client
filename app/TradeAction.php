<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TradeAction
 * @package App
 */
class TradeAction extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['done', 'done_time', 'done_member_id', 'delivery', 'delivery_time', 'delivery_member_id', 'bl', 'bl_time', 'bl_member_id', 'store', 'store_time', 'store_member_id','fc', 'fc_time', 'fc_member_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function buy()
    {
        return $this->hasOne(Buy::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne(Sale::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function done_member()
    {
        return $this->belongsTo(Member::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function delivery_member()
    {
        return $this->belongsTo(Member::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bl_member()
    {
        return $this->belongsTo(Member::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function store_member()
    {
        return $this->belongsTo(Member::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fc_member()
    {
        return $this->belongsTo(Member::class);
    }
}
