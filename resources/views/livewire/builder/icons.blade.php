<div id="icons" class="relative bg-white dark:border border-gray-200 dark:border-gray-700 dark:bg-gray-800 shadow rounded-lg">
    <div class="px-4 py-5 sm:px-6 sticky top-0 z-10 rounded-lg border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 shadow">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight">{{ __('Icons') }}</h2>
    </div>

    <div class="px-4 py-5 sm:px-6 space-y-8 rounded-b-lg">
        <div>
            <label for="icon-search" class="sr-only">Icon Search</label>
            <div class="mt-1 relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <x-heroicon-s-search class="h-5 w-5 text-gray-400"/>
                </div>
                <input type="text" wire:model="iconSearch" name="icon-search" id="icon-search" placeholder="Search Icons" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-10 sm:text-sm border-gray-300 dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700 rounded-md">
            </div>
        </div>
        <div class="max-h-96 overflow-scroll space-y-4">
            @foreach($icons as $lib => $libIcons)
            <span class="text-lg text-gray-900 dark:text-gray-200">{{ $lib }}</span>
            <div class="flex flex-wrap">
                @forelse($libIcons as $i)
                <label for="icon-{{ $i['name'] }}" class="p-2 flex items-center justify-center w-12 h-12 rounded-md border border-gray-200 dark:border-gray-800 m-1 {{ $form['icon'] === $i['component'] ? 'bg-indigo-600 dark:bg-indigo-400' : '' }}">
                    <input id="icon-{{ $i['name'] }}" type="radio" wire:model="form.icon" value="{{ $i['component'] }}" class="hidden">
                    <x-dynamic-component :component="$i['component']" :class="$form['icon'] === $i['component'] ? 'text-white' : 'text-gray-700 dark:text-gray-400'" />
                </label>
                @empty
                <span class="text-gray-700 dark:text-gray-400">No icon with that search query found in this collection.</span>
                @endforelse
            </div>
            @endforeach
        </div>
    </div>
</div>
