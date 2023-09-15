<div id="icons" class="relative bg-white border-gray-200 rounded-lg shadow dark:border dark:border-gray-700 dark:bg-gray-800">
    <div class="sticky top-0 z-10 px-4 py-5 bg-white border-b border-gray-200 rounded-lg sm:px-6 dark:border-gray-700 dark:bg-gray-800">
        <h2 class="text-2xl font-semibold leading-tight text-gray-800 dark:text-gray-100">{{ __('Icons') }}</h2>
    </div>

    <div class="px-4 py-5 space-y-8 rounded-b-lg sm:px-6">
        <div>
            <label for="icon-search" class="sr-only">Icon Search</label>
            <div class="relative mt-1 rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <x-heroicon-s-magnifying-glass class="w-5 h-5 text-gray-400" />
                </div>
                <input type="text" wire:model.live="iconSearch" name="icon-search" id="icon-search" placeholder="Search Icons" class="block w-full pl-10 border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700">
            </div>
        </div>
        <div class="space-y-4 overflow-scroll max-h-96">
            @foreach ($icons as $lib => $libIcons)
            <div>
                <span class="text-lg text-gray-900 dark:text-gray-200">{{ $lib }}</span>
                <div class="flex flex-wrap">
                    @forelse ($libIcons as $i)
                    <label for="icon-{{ $i['name'] }}" class="p-2 flex items-center justify-center w-12 h-12 rounded-md border border-gray-200 dark:border-gray-800 m-1 {{ $form['icon'] === $i['component'] ? 'bg-cyan-600 dark:bg-cyan-400' : '' }}">
                        <input id="icon-{{ $i['name'] }}" type="radio" wire:model.live="form.icon" value="{{ $i['component'] }}" class="hidden">
                        <x-dynamic-component :component="$i['component']" :class="$form['icon'] === $i['component'] ? 'text-white' : 'text-gray-700 dark:text-gray-400'" />
                    </label>
                    @empty
                    <span class="text-gray-700 dark:text-gray-400">No icon with that search query found in this collection.</span>
                    @endforelse
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>