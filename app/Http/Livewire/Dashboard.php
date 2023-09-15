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

        if ($image = $keyImage->getMedia('key-image')) {
            return $image;
        } else {
            return $keyImage->generate();
        }
    }

    public function duplicate($id)
    {
        $keyImage = $this->keyImages->find($id);
        $keyImage->duplicate();
    }

    public function edit($id)
    {
        $keyImage = $this->keyImages->find($id);

        return redirect()->route('builder', $keyImage);
    }

    public function generate($id)
    {
        $keyImage = $this->keyImages->find($id);

        $file = $keyImage->generate();

        return $file;
    }
}
