<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * @package App
 */
class Client extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['description', 'info_box_id', 'company_id'];

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
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dvs()
    {
        return $this->hasMany(Dv::class);
    }
}
