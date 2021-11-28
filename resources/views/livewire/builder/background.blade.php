<div id="background" class="relative bg-white dark:border border-gray-200 dark:border-gray-700 dark:bg-gray-800 shadow rounded-lg">
    <div class="px-4 py-5 sm:px-6 sticky top-0 z-10 rounded-lg border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 shadow">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight">{{ __('Background') }}</h2>
    </div>

    <div class="px-4 py-5 sm:px-6 space-y-8 rounded-b-lg">
        <div>
            <label class="text-base font-medium text-gray-900 dark:text-gray-200">Style</label>
            <fieldset class="mt-4">
                <legend class="sr-only">Background Style</legend>
                <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                    <div class="flex items-center">
                        <input id="solid" wire:model="form.background.style" name="background-style" value="solid" type="radio" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                        <label for="solid" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
                            Solid
                        </label>
                    </div>

                    <div class="flex items-center">
                        <input id="gradient" wire:model="form.background.style" name="background-style" value="gradient" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                        <label for="gradient" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
                            Gradient
                        </label>
                    </div>
                </div>
            </fieldset>
        </div>

        @if($form['background']['style'] === 'solid')
            @include('livewire.builder.background-solid')
        @else
            <span class="text-lg text-gray-700 dark:text-gray-400">TBD</span>
        @endif
    </div>
</div>
