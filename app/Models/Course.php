<?php

declare(strict_types = 1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id'                => 'integer',
        'instructor_id'     => 'integer',
        'title'             => 'array',
        'description'       => 'array',
        'short_description' => 'array',
        'pre_requisites'    => 'array',
        'target_audience'   => 'array',
        'meta_title'        => 'array',
        'meta_description'  => 'array',
        'is_fifo'           => 'boolean',
        'published_at'      => 'timestamp',
        'started_at'        => 'timestamp',
        'finished_at'       => 'timestamp',
    ];

    public function instructor(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }

    public function coursePrices(): HasMany
    {
        return $this->hasMany(CoursePrice::class);
    }

    public function categories(): MorphToMany
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }
}
