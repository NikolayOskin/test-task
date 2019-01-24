<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Revisionable\Laravel\Revisionable; // trait

class Post extends Model
{
    use Revisionable;

    protected $fillable = [
        'title', 
        'body',
        'category_id'
    ];  

    protected $revisionable = [
        'title',
        'body'
    ];

    public function revision()
    {
        return $this->hasMany('App\Revisions');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
