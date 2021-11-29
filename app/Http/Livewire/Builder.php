<?php

namespace App\Http\Livewire;

use App\Models\KeyImage;
use App\Traits\WithColors;
use App\Traits\WithIcons;
use Illuminate\Support\Str;
use Livewire\Component;
use Spatie\Browsershot\Browsershot;

class Builder extends Component
{
    use WithColors, WithIcons;

    public $keyImage;

    public $bgColorSearch;
    public $iconColorSearch;

    public $filename;
    public $form = [
        'background' => [
            'style' => 'solid',
            'color' => ''
        ],
        'icon' => null,
        'styling' => [
            'color' => '',
            'shadow' => '',
            'type' => 'builder',
            'builder' => [ [] ]
        ],
    ];

    protected $rules = [
        'filename' => 'required',
        'form.background.style' => 'required',
        'form.background.color' => 'required|string|max:7',
        'form.icon' => 'required',
        'form.styling.color' => 'required|string|max:7',
    ];

    public function mount($keyImage = null)
    {
        if($keyImage) {
            $keyImage = KeyImage::find($keyImage);

            $this->keyImage = $keyImage;
            $this->form = $keyImage->config;
            $this->filename = $keyImage->filename;
        }
    }

    public function render()
    {
        return view('livewire.builder')
            ->with([
                'colorData' => $this->colorData,
                'backgroundColors' => $this->backgroundColors,
                'iconColors' => $this->iconColors,
                'icons' => $this->icons,
                'steps' => $this->steps,
            ]);
    }

    public function getBackgroundColorsProperty()
    {
        return collect($this->colorData)
            ->when($this->bgColorSearch && is_numeric($this->bgColorSearch), function($collection) {
                return $collection->map(fn($colorGroup) => $colorGroup['500']);
            })
            ->when($this->bgColorSearch && !is_numeric($this->bgColorSearch), function($collection) {
                return $collection->filter(fn($group, $key) => Str::contains(strtolower($key), strtolower($this->bgColorSearch)));
            });
    }

    public function getIconColorsProperty()
    {
        return collect($this->colorData)
            ->when($this->iconColorSearch && is_numeric($this->iconColorSearch), function($collection) {
                return $collection->map(fn($colorGroup) => $colorGroup['500']);
            })
            ->when($this->iconColorSearch && !is_numeric($this->iconColorSearch), function($collection) {
                return $collection->filter(fn($group, $key) => Str::contains(strtolower($key), strtolower($this->iconColorSearch)));
            });
    }

    public function getStepsProperty()
    {
        return [
            ['link' => '#background', 'title' => 'Background', 'subtitle' => 'Choose a color, or image to be the icon background', 'complete' => $this->form['background']['color'] !== '', 'active' => false],
            ['link' => '#icon', 'title' => 'Icon', 'subtitle' => 'Choose an icon, or upload one', 'complete' => $this->form['icon'], 'active' => false],
            ['link' => '#styling', 'title' => 'Styling', 'subtitle' => 'Add shadows, or other affects to the icon', 'complete' => $this->form['styling']['color'], 'active' => false],
            ['link' => '#download', 'title' => 'Download', 'subtitle' => 'Get your creation to use in stream deck', 'complete' => optional($this->keyImage)->getMedia('key-image'), 'active' => false],
        ];
    }

    public function addRowToBuilder()
    {
        $this->form['styling']['builder'][] = [];
    }

    public function download()
    {
        $this->validate();

        if(!$this->keyImage) {
            $this->keyImage = KeyImage::create([
                'user_id' => auth()->check() ? auth()->id() : null,
                'filename' => $this->filename,
                'config' => $this->form,
            ]);
            $configChanged = true;
        } else {
            $configChanged = $this->keyImage->config !== $this->form;
            $this->keyImage->config = $this->form;
            $this->keyImage->filename = $this->filename;
            $this->keyImage->save();
        }

        if($configChanged) {
            $file = $this->keyImage->generate();
        } else {
            $file = $this->keyImage->getMedia('key-image');
        }

        return $file;
    }

    public function save()
    {
        $this->validate();

        if(!$this->keyImage) {
            $this->keyImage = KeyImage::create([
                'user_id' => auth()->check() ? auth()->id() : null,
                'filename' => $this->filename,
                'config' => $this->form,
            ]);
        } else {
            $this->keyImage->config = $this->form;
            $this->keyImage->filename = $this->filename;
            $this->keyImage->user_id = auth()->id();
            $this->keyImage->save();
        }

        return redirect()->route('dashboard');
    }

}
