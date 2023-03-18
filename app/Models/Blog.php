<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Blog extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [
        'title',
        'description',
        'content',
        'slug',
        'category_id',
        'thumbnail',
        'tag',
        'status',
        'user_id'
    ];

    public const STATUS = [
        'ACTIVE' => 'active',
        'INACTIVE' => 'inactive'
    ];
    /**
     * Return the created_at configuration array for this model.
     *
     * @return array
     */
    protected $casts = [
        'created_at' => 'date:d-m-Y',
        'updated_at' => 'date:d-m-Y'
    ];
    public $timestamps = true;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeWithWhereHas($query, $relation, $constraint){
        return $query->whereHas($relation, $constraint)
        ->with([$relation => $constraint]);
       }
}
