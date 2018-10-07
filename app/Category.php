<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App
 */
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['category'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function premiums()
    {
        return $this->hasMany(Premium::class);
    }
}
