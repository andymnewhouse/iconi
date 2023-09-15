<div id="download" class="relative bg-white border-gray-200 rounded-lg shadow dark:border dark:border-gray-700 dark:bg-gray-800">
    <div class="sticky top-0 z-10 px-4 py-5 bg-white border-b border-gray-200 rounded-lg sm:px-6 dark:border-gray-700 dark:bg-gray-800">
        <h2 class="text-2xl font-semibold leading-tight text-gray-800 dark:text-gray-100">{{ __('Download') }}</h2>
    </div>

    <div class="px-4 py-5 space-y-4 rounded-b-lg sm:px-6">
        <div>
            <label for="filename" class="text-gray-700 dark:text-gray-400">Filename</label>
            <input type="text" id="filename" wire:model.live="filename" class="block w-full border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm dark:bg-gray-900 dark:text-gray-200 dark:focus:bg-gray-800 dark:border-gray-700">
        </div>

        <div>
            <button type="button" wire:click="download" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-cyan-700 bg-cyan-100 hover:bg-cyan-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                Download
            </button>

            @auth
            <button type="button" wire:click="save" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded text-cyan-700 bg-cyan-100 hover:bg-cyan-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                Save
            </button>
            @endauth
        </div>
    </div>
</div>
