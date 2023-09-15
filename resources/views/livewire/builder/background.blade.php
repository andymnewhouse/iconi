<div id="background" class="relative bg-white border-gray-200 rounded-lg shadow dark:border dark:border-gray-700 dark:bg-gray-800">
    <div class="sticky top-0 z-10 px-4 py-5 bg-white border-b border-gray-200 rounded-lg sm:px-6 dark:border-gray-700 dark:bg-gray-800">
        <h2 class="text-2xl font-semibold leading-tight text-gray-800 dark:text-gray-100">{{ __('Background') }}</h2>
    </div>

    <div class="px-4 py-5 space-y-8 rounded-b-lg sm:px-6">
        <div>
            <label class="text-base font-medium text-gray-900 dark:text-gray-200">Style</label>
            <fieldset class="mt-4">
                <legend class="sr-only">Background Style</legend>
                <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                    <div class="flex items-center">
                        <input id="solid" wire:model.live="form.background.style" name="background-style" value="solid" type="radio" checked class="w-4 h-4 border-gray-300 focus:ring-cyan-500 text-cyan-600">
                        <label for="solid" class="block ml-3 text-sm font-medium text-gray-700 dark:text-gray-400">
                            Solid
                        </label>
                    </div>

                    <div class="flex items-center">
                        <input id="gradient" wire:model.live="form.background.style" name="background-style" value="gradient" type="radio" class="w-4 h-4 border-gray-300 focus:ring-cyan-500 text-cyan-600">
                        <label for="gradient" class="block ml-3 text-sm font-medium text-gray-700 dark:text-gray-400">
                            Gradient
                        </label>
                    </div>
                </div>
            </fieldset>
        </div>

        @if ($form['background']['style'] === 'solid')
            @include('livewire.builder.background-solid')
        @else
            <span class="text-lg text-gray-700 dark:text-gray-400">TBD</span>
        @endif
    </div>
</div>
