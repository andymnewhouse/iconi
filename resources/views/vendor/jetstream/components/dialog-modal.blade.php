@props(['id' => null, 'maxWidth' => null])

<x-jet-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4">
        <div class="text-lg text-gray-900 dark:text-gray-200">
            {{ $title }}
        </div>

        <div class="mt-4 text-gray-600 dark:text-gray-300">
            {{ $content }}
        </div>
    </div>

    <div class="px-6 py-4 text-right bg-gray-100 border-t border-gray-100 dark:bg-gray-800 dark:border-gray-700">
        {{ $footer }}
    </div>
</x-jet-modal>
