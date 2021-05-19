<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryAlbum extends Model
{
    protected $fillable = [
        'album_name'
    ];

    public function photos()
    {
    	return $this->hasMany(GalleryPhoto::class);
    }
}
