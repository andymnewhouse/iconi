<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class KeyImage extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public $guarded = [];

    public $casts = ['config' => 'collection'];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('key-image')
            ->singleFile();
    }
}
