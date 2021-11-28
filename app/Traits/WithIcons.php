<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait WithIcons
{

    public $iconSearch = '';

    public $libraries = [
        'blade-ui-kit/blade-heroicons' => ['component' => 'heroicon', 'title' => 'Heroicons'],
        'codeat3/blade-akar-icons' => ['component' => 'akar', 'title' => 'Akar Icons'],
    ];

    public function getIconsProperty()
    {
        return collect($this->libraries)->mapWithKeys(function($lib, $key) {
            $icons = collect(app('files')->files(base_path("/vendor/$key/resources/svg")))
                ->when($this->iconSearch !== '', function($collection) {
                    return $collection->filter(fn($icon) => Str::contains($icon->getFilename(), $this->iconSearch));
                })
                ->map(fn($icon) => [
                    'name' => $icon->getFilename(),
                    'component' => $lib['component'] . '-' . $icon->getBasename('.svg'),
                ]);

            return [$lib['title'] => $icons];
        });
    }
}
