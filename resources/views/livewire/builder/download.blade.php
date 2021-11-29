<div id="download" class="relative bg-white dark:border border-gray-200 dark:border-gray-700 dark:bg-gray-800 shadow rounded-lg">
    <div class="px-4 py-5 sm:px-6 sticky top-0 z-10 rounded-lg border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-800 shadow">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight">{{ __('Download') }}</h2>
    </div>

    <div class="px-4 py-5 sm:px-6 rounded-b-lg space-y-4">
        <div>
            <label for="filename" class="text-gray-700 dark:text-gray-400">Filename</label>
            <input type="text" id="filename" wire:model="filename" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700 rounded-md">
        </div>

        <div>
            <button type="button" wire:click="download" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Download
            </button>

            @auth
            <button type="button" wire:click="save" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-indigo-700 bg-indigo-100 hover:bg-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Save
            </button>
            @endauth
        </div>
    </div>
</div>
