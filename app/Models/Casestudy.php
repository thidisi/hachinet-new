<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casestudy extends Model
{
    
    use HasFactory, Sluggable;
    protected $fillable = [
        'name',
        'description',
        'slug',
        'location',
        'completed',
        'shortdesc',
        'team_size',
        'skill',
        'contract_type',
        'size',
        'client',
        'url',
        'category_id',
        'status',
        'responsibilities',
        'feature',
        'tag'
    ];
    public const STATUS = [ 
        'ACTIVE' => 'active',
        'INACTIVE' => 'inactive'
    ];
    public const TYPE = [ 
        'PROJECTBASED' => 'Project Based',
        'PROJECTLABOR' => 'Project labor',
        'PRODUCTIONS' => 'Productions',
        'BODYSHOPPING' => 'Body-Shopping',
    ];
    public const RESPONSIBILITIES = [ 
        'CONSULTING' => 'Consulting',
        'BASICDESIGN' => 'Basic Design',
        'DETAILSDESIGN' => 'Details Design',
        'CODING' => 'Coding',
        'TESTING' => 'Testing',
        'DEPLOYMENT' => 'Deployment',
    ];
    /**
     * Return the created_at configuration array for this model.
     *
     * @return array
     */
    protected $casts = [
        'created_at' => 'date:d-m-Y',
        'updated_at' => 'date:d-m-Y',
        'completed' => 'date:d-m-Y'
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

    public function categories() {
        return $this->belongsTo(Category::class, 'category_id'); 
    }
    public function thumbnails() {
        return $this->hasMany(Thumbnail::class, 'case_id'); 
    }
}
