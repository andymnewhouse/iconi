<div>
    <label for="background-color-search" class="sr-only">Background Color</label>
    <div class="mt-1 relative rounded-md shadow-sm">
        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <x-heroicon-s-search class="h-5 w-5 text-gray-400" />
        </div>
        <input type="text" wire:model="bgColorSearch" name="background-color-search" id="background-color-search" placeholder="Search Colors" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700 rounded-md">
    </div>
</div>
<div class="max-h-96 overflow-scroll">
    <div class="flex flex-wrap">
        @foreach($backgroundColors as $group => $colors)
            @if(is_array($colors))
            <div class="flex flex-wrap">
                @foreach($colors as $color)
                <label for="background-color-{{ $color }}" class="m-1 flex items-center justify-center w-12 h-12 rounded-md border border-gray-200 dark:border-gray-800" style="background: {{ $color }}">
                    <input id="background-color-{{ $color }}" type="radio" wire:model="form.background.color" value="{{ $color }}" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                </label>
                @endforeach
                <div class="text-gray-900 dark:text-gray-200 h-12 flex items-center m-1">
                    {{ $group }}
                </div>
            </div>
            @else
            <label for="background-color-{{ $colors }}" class="m-1 flex items-center justify-center w-12 h-12 rounded-md border border-gray-200 dark:border-gray-800" style="background: {{ $colors }}">
                <input id="background-color-{{ $colors }}" type="radio" wire:model="form.background.color" value="{{ $colors }}" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
            </label>
            @endif
        @endforeach
    </div>
</div>
