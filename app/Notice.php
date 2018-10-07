<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notice
 * @package App
 */
class Notice extends Model
{
    /**
     * @var array
     */
    protected $fillable = ["msg", 'read', 'member_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
