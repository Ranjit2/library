<?php

namespace Librory\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'shelf_id',
    ];

    /**
     * -------------------------------------------------------------------------
     * Relationship functions
     * -------------------------------------------------------------------------
     */

    public function shelf()
    {
        return $this->belongsTo(Shelf::class, 'shelf_id', 'id');
    }

    /**
     * -------------------------------------------------------------------------
     * Mutator functions
     * -------------------------------------------------------------------------
     */

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    /**
     * -------------------------------------------------------------------------
     * Scope functions
     * -------------------------------------------------------------------------
     */

    public function scopeOrderByName($query, $returnQuery = false)
    {
        $query = $query->orderBy('name');

        return $returnQuery ? $query : $query->get();
    }

    /**
     * -------------------------------------------------------------------------
     * Route functions
     * -------------------------------------------------------------------------
     */

    public function editUrl()
    {
        return route('categories.edit', [
            'category' => $this->id
        ]);
    }

    public function updateUrl()
    {
        return route('categories.update', [
            'category' => $this->id
        ]);
    }
}
