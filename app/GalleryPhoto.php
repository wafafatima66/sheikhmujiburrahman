<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryPhoto extends Model
{
    protected $fillable = [
        'photo_name',
        'photo_link'
    ];

    public function products()
    {
    	return $this->belongsTo(GalleryAlbum::class);
    }
}
