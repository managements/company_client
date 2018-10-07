<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unload
 * @package App
 */
class Unload extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['join', 'prince', 'tva', 'taxes', 'accounting_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accounting()
    {
        return $this->belongsTo(Accounting::class);
    }
}
