@props(['title' => null])
<header class="bg-white dark:bg-gray-800 shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @if($title)
        <h1 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight">
            {{ __($title) }}
        </h1>
        @else
        {{ $slot }}
        @endif
    </div>
</header>
