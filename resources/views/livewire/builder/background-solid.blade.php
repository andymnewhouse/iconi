<div>
    <label for="background-color-search" class="sr-only">Background Color</label>
    <div class="relative mt-1 rounded-md shadow-sm">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <x-heroicon-s-magnifying-glass class="w-5 h-5 text-gray-400" />
        </div>
        <input type="text" wire:model.live="bgColorSearch" name="background-color-search" id="background-color-search" placeholder="Search Colors" class="block w-full pl-10 border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700">
    </div>
</div>
<div class="overflow-scroll max-h-96">
    <input type="text" wire:model.live="form.background.color" placeholder="Custom Hex Color" class="border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-wrap">
        @foreach ($backgroundColors as $group => $colors)
        @if (is_array($colors))
        <div class="flex flex-wrap">
            @foreach ($colors as $color)
            <label for="background-color-{{ $color }}" class="flex items-center justify-center w-12 h-12 m-1 border border-gray-200 rounded-md dark:border-gray-800" style="background: {{ $color }}">
                <input id="background-color-{{ $color }}" type="radio" wire:model.live="form.background.color" value="{{ $color }}" class="w-4 h-4 border-gray-300 focus:ring-cyan-500 text-cyan-600">
            </label>
            @endforeach
            <div class="flex items-center h-12 m-1 text-gray-900 dark:text-gray-200">
                {{ $group }}
            </div>
        </div>
        @else
        <label for="background-color-{{ $colors }}" class="flex items-center justify-center w-12 h-12 m-1 border border-gray-200 rounded-md dark:border-gray-800" style="background: {{ $colors }}">
            <input id="background-color-{{ $colors }}" type="radio" wire:model.live="form.background.color" value="{{ $colors }}" class="w-4 h-4 border-gray-300 focus:ring-cyan-500 text-cyan-600">
        </label>
        @endif
        @endforeach
    </div>
</div>