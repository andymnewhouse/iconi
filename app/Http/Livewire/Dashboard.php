<?php

namespace App\Http\Livewire;

use App\Models\KeyImage;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard')
            ->with([
                'keyImages' => $this->keyImages,
            ]);
    }

    public function getKeyImagesProperty()
    {
        return KeyImage::where('user_id', auth()->id())->get();
    }

    public function download($id)
    {
        $keyImage = $this->keyImages->find($id);

        return $keyImage->getMedia('key-image');
    }

    public function edit($id)
    {
        $keyImage = $this->keyImages->find($id);

        return redirect()->route('builder', $keyImage);
    }
}
