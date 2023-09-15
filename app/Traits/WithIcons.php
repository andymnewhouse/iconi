<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait WithIcons
{
    public $iconSearch = '';

    public $libraries = [
        'codeat3/blade-akar-icons' => ['component' => 'akar', 'title' => 'Akar Icons', 'url' => 'https://akaricons.com/'],
        'codeat3/blade-bytesize-icons' => ['component' => 'bytesize', 'title' => 'Bytesize', 'url' => 'https://danklammer.com/bytesize-icons/'],
        'blade-ui-kit/blade-heroicons' => ['component' => 'heroicon', 'title' => 'Heroicons', 'url' => 'https://heroicons.com/'],
        'codeat3/blade-weather-icons' => ['component' => 'wi', 'title' => 'Weather Icons', 'url' => 'https://erikflowers.github.io/weather-icons/'],
        'blade-ui-kit/blade-zondicons' => ['component' => 'zondicon', 'title' => 'Zondicons', 'url' => 'http://www.zondicons.com/'],
    ];

    public function getIconsProperty()
    {
        return collect($this->libraries)->mapWithKeys(function ($lib, $key) {
            $icons = collect(app('files')->files(base_path("/vendor/{$key}/resources/svg")))
                ->when($this->iconSearch !== '', function ($collection) {
                    return $collection->filter(fn ($icon) => Str::contains($icon->getFilename(), $this->iconSearch));
                })
                ->map(fn ($icon) => [
                    'name' => $icon->getFilename(),
                    'component' => $lib['component'] . '-' . $icon->getBasename('.svg'),
                ]);

            return [$lib['title'] => $icons];
        });
    }
}
