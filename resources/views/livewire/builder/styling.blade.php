<div id="styling" class="relative bg-white border-gray-200 rounded-lg shadow dark:border dark:border-gray-700 dark:bg-gray-800">
    <div class="sticky top-0 z-10 px-4 py-5 bg-white border-b border-gray-200 rounded-lg sm:px-6 dark:border-gray-700 dark:bg-gray-800">
        <h2 class="text-2xl font-semibold leading-tight text-gray-800 dark:text-gray-100">{{ __('Styling') }}</h2>
    </div>

    <div class="px-4 py-5 space-y-8 rounded-b-lg sm:px-6">
        <div>
            <label for="icon-color-search" class="text-base font-medium text-gray-900 dark:text-gray-200">Icon Color</label>
            <div class="relative mt-1 rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <x-heroicon-s-magnifying-glass class="w-5 h-5 text-gray-400" />
                </div>
                <input type="text" wire:model.live="iconColorSearch" name="icon-color-search" id="icon-color-search" placeholder="Search Colors" class="block w-full pl-10 border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700">
            </div>
        </div>
        <div class="overflow-scroll max-h-96">
            <div class="flex flex-wrap">
                @foreach ($iconColors as $group => $colors)
                @if (is_array($colors))
                <div class="flex flex-wrap">
                    @foreach ($colors as $color)
                    <label for="icon-color-{{ $color }}" class="flex items-center justify-center w-12 h-12 m-1 border border-gray-200 rounded-md dark:border-gray-800" style="background: {{ $color }}">
                        <input id="icon-color-{{ $color }}" type="radio" wire:model.live="form.styling.color" value="{{ $color }}" class="w-4 h-4 border-gray-300 focus:ring-cyan-500 text-cyan-600">
                    </label>
                    @endforeach
                    <div class="flex items-center h-12 m-1 text-gray-900 dark:text-gray-200">
                        {{ $group }}
                    </div>
                </div>
                @else
                <label for="icon-color-{{ $colors }}" class="flex items-center justify-center w-12 h-12 m-1 border border-gray-200 rounded-md dark:border-gray-800" style="background: {{ $colors }}">
                    <input id="icon-color-{{ $colors }}" type="radio" wire:model.live="form.styling.color" value="{{ $colors }}" class="w-4 h-4 border-gray-300 focus:ring-cyan-500 text-cyan-600">
                </label>
                @endif
                @endforeach
            </div>
        </div>

        <div class="space-y-4">
            <div>
                <label class="text-base font-medium text-gray-900 dark:text-gray-200">Shadow Type</label>
                <fieldset class="mt-4">
                    <legend class="sr-only">Shadow Type</legend>
                    <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                        <div class="flex items-center">
                            <input id="builder" wire:model.live="form.styling.type" name="shadow-type" value="builder" type="radio" checked class="w-4 h-4 border-gray-300 focus:ring-cyan-500 text-cyan-600">
                            <label for="builder" class="block ml-3 text-sm font-medium text-gray-700 dark:text-gray-400">
                                Builder
                            </label>
                        </div>

                        <div class="flex items-center">
                            <input id="manual" wire:model.live="form.styling.type" name="shadow-type" value="manual" type="radio" class="w-4 h-4 border-gray-300 focus:ring-cyan-500 text-cyan-600">
                            <label for="manual" class="block ml-3 text-sm font-medium text-gray-700 dark:text-gray-400">
                                Manual
                            </label>
                        </div>
                    </div>
                </fieldset>
            </div>

            @if ($form['styling']['type'] === 'builder')
            <div class="space-y-4">
                @foreach ($form['styling']['builder'] as $index => $row)
                <div :wire:key="'builder-'.$index" class="flex items-center space-x-4">
                    <div>
                        <label for="icon-shadow-offset-x-{{ $index }}" class="sr-only">Offset X</label>
                        <input type="text" wire:model.live="form.styling.builder.{{ $index }}.offsetX" name="icon-shadow-offset-x-{{ $index }}" id="icon-shadow-offset-x-{{ $index }}" placeholder="Offset X" class="block w-full border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700" />
                    </div>
                    <div>
                        <label for="icon-shadow-offset-y-{{ $index }}" class="sr-only">Offset Y</label>
                        <input type="text" wire:model.live="form.styling.builder.{{ $index }}.offsetY" name="icon-shadow-offset-y-{{ $index }}" id="icon-shadow-offset-y-{{ $index }}" placeholder="Offset Y" class="block w-full border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700" />
                    </div>
                    <div>
                        <label for="icon-shadow-blur-radius-{{ $index }}" class="sr-only">Blur Radius</label>
                        <input type="text" wire:model.live="form.styling.builder.{{ $index }}.blur" name="icon-shadow-blur-radius-{{ $index }}" id="icon-shadow-blur-radius-{{ $index }}" placeholder="Blur Radius" class="block w-full border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700" />
                    </div>
                    <div>
                        <label for="icon-shadow-color-{{ $index }}" class="sr-only">Color</label>
                        <input type="text" wire:model.live="form.styling.builder.{{ $index }}.color" name="icon-shadow-color-{{ $index }}" id="icon-shadow-color-{{ $index }}" placeholder="Color" class="block w-full border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700" />
                    </div>
                    @if ($index > 0)
                    <button type="button" wire:click="removeRowFromBuilder({{ $index }})" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-cyan-700 bg-cyan-100 hover:bg-cyan-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                        &minus;
                    </button>
                    @endif
                </div>
                @endforeach

                <button type="button" wire:click="addRowToBuilder" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-cyan-700 bg-cyan-100 hover:bg-cyan-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                    Add Row
                </button>
            </div>
            @else
            <div>
                <label for="shadow"></label>
                <textarea name="shadow" id="shadow" wire:model.live="form.styling.shadow" placeholder="filter: drop-shadow(0 0 0.75rem crimson);" class="block w-full border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700" rows="10"></textarea>
            </div>
            @endif
        </div>
    </div>
</div>