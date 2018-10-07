<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tel
 * @package App
 */
class Tel extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['tel', 'default', 'info_box_id', 'info_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function info_box()
    {
        return $this->belongsTo(Info_box::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function info()
    {
        return $this->belongsTo(Info::class);
    }
}
