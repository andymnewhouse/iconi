<div id="styling" class="relative bg-white dark:border border-gray-200 dark:border-gray-700 dark:bg-gray-800 shadow rounded-lg">
    <div class="px-4 py-5 sm:px-6 sticky top-0 z-10 rounded-lg border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 shadow">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight">{{ __('Styling') }}</h2>
    </div>

    <div class="px-4 py-5 sm:px-6 space-y-8 rounded-b-lg">
    <div>
            <label for="icon-color-search" class="text-base font-medium text-gray-900 dark:text-gray-200">Icon Color</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <x-heroicon-s-search class="h-5 w-5 text-gray-400" />
                </div>
                <input type="text" wire:model="iconColorSearch" name="icon-color-search" id="icon-color-search" placeholder="Search Colors" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700 rounded-md">
            </div>
        </div>
        <div class="max-h-96 overflow-scroll">
            <div class="flex flex-wrap">
                @foreach($iconColors as $group => $colors)
                    @if(is_array($colors))
                    <div class="flex flex-wrap">
                        @foreach($colors as $color)
                        <label for="icon-color-{{ $color }}" class="m-1 flex items-center justify-center w-12 h-12 rounded-md border border-gray-200 dark:border-gray-800" style="background: {{ $color }}">
                            <input id="icon-color-{{ $color }}" type="radio" wire:model="form.styling.color" value="{{ $color }}" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                        </label>
                        @endforeach
                        <div class="text-gray-900 dark:text-gray-200 h-12 flex items-center m-1">
                            {{ $group }}
                        </div>
                    </div>
                    @else
                    <label for="icon-color-{{ $colors }}" class="m-1 flex items-center justify-center w-12 h-12 rounded-md border border-gray-200 dark:border-gray-800" style="background: {{ $colors }}">
                        <input id="icon-color-{{ $colors }}" type="radio" wire:model="form.styling.color" value="{{ $colors }}" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
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
                            <input id="builder" wire:model="form.styling.type" name="shadow-type" value="builder" type="radio" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                            <label for="builder" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Builder
                            </label>
                        </div>

                        <div class="flex items-center">
                            <input id="manual" wire:model="form.styling.type" name="shadow-type" value="manual" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                            <label for="manual" class="ml-3 block text-sm font-medium text-gray-700 dark:text-gray-400">
                                Manual
                            </label>
                        </div>
                    </div>
                </fieldset>
            </div>

            @if($form['styling']['type'] === 'builder')
                <div class="space-y-4">
                    @foreach($form['styling']['builder'] as $index => $row)
                    <div :wire:key="'builder-'.$index" class="flex space-x-4 items-center">
                        <div>
                            <label for="icon-shadow-offset-x-{{ $index }}" class="sr-only">Offset X</label>
                            <input type="text" wire:model="form.styling.builder.{{ $index }}.offsetX" name="icon-shadow-offset-x-{{ $index }}" id="icon-shadow-offset-x-{{ $index }}" placeholder="Offset X" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700 rounded-md"/>
                        </div>
                        <div>
                            <label for="icon-shadow-offset-y-{{ $index }}" class="sr-only">Offset Y</label>
                            <input type="text" wire:model="form.styling.builder.{{ $index }}.offsetY" name="icon-shadow-offset-y-{{ $index }}" id="icon-shadow-offset-y-{{ $index }}" placeholder="Offset Y" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700 rounded-md"/>
                        </div>
                        <div>
                            <label for="icon-shadow-blur-radius-{{ $index }}" class="sr-only">Blur Radius</label>
                            <input type="text" wire:model="form.styling.builder.{{ $index }}.blur" name="icon-shadow-blur-radius-{{ $index }}" id="icon-shadow-blur-radius-{{ $index }}" placeholder="Blur Radius" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700 rounded-md"/>
                        </div>
                        <div>
                            <label for="icon-shadow-color-{{ $index }}" class="sr-only">Color</label>
                            <input type="text" wire:model="form.styling.builder.{{ $index }}.color" name="icon-shadow-color-{{ $index }}" id="icon-shadow-color-{{ $index }}" placeholder="Color" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700 rounded-md"/>
                        </div>
                        @if($index > 0)
                        <button type="button" wire:click="removeRowFromBuilder({{ $index }})" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            &minus;
                        </button>
                        @endif
                    </div>
                    @endforeach

                    <button type="button" wire:click="addRowToBuilder" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Add Row
                    </button>
                </div>
            @else
            <div>
                <label for="shadow"></label>
                <textarea name="shadow" id="shadow" wire:model="form.styling.shadow" placeholder="filter: drop-shadow(0 0 0.75rem crimson);" class="focus:ring-indigo-500 focus:border-indigo-500 block sm:text-sm border-gray-300 dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700 rounded-md w-full" rows="10"></textarea>
            </div>
            @endif
        </div>
    </div>
</div>
