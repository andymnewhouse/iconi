<?php

namespace App\Livewire;

use App\Models\KeyImage;
use Livewire\Component;

class Preview extends Component
{
    public KeyImage $keyImage;

    public $form;

    public function mount($keyImage)
    {
        $this->keyImage = $keyImage;
        $this->form = $keyImage->config;
    }

    public function render()
    {
        return view('livewire.preview')
            ->layout('layouts.app', ['hideNav' => true]);
    }
}
