<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Sluggable;
    protected $fillable = [
        'name',
        'description',
        'status',
        'slug',
        'image',
        'type',
    ];
    const STATUS = [
        'ACTIVE' => 'active',
        'INACTIVE' => 'inactive'
    ];
    const TYPE = [
        'BLOG' => 'blog',
        'INDUSTRIES' => 'industries'
    ];
    /**
     * Return the created_at configuration array for this model.
     *
     * @return array
     */
    protected $casts = [
        'created_at' => 'date:d-m-Y',
        'updated_at' => 'date:d-m-Y',
    ];    
    public $timestamps = true;
    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

}
