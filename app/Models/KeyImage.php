<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Browsershot\Browsershot;
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

    public function duplicate()
    {
        $newImage = $this->replicate();
        $newImage->filename = $newImage->filename.'-copy';

        $newImage->push();

        return $newImage;
    }

    public function generate()
    {
        $filedata = Browsershot::url(route('preview', $this))
            ->windowSize(288, 288)
            ->base64Screenshot();

        return $this
            ->addMediaFromBase64($filedata)
            ->usingFileName($this->filename.'.png')
            ->toMediaCollection('key-image');
    }
}
