<nav aria-label="Progress">
    <ol role="list" class="overflow-hidden">
        @foreach ($steps as $step)
        <li class="relative {{ $loop->last ? '' : 'pb-10' }}">
            @if (!$loop->last)
            <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full {{ $step['complete'] ? 'bg-cyan-600 dark:bg-cyan-400' : 'bg-gray-300 dark:bg-gray-700' }}" aria-hidden="true"></div>
            @endif

            <a href="{{ $step['link'] }}" class="relative flex items-start group"> <!-- If active aria-current="step" -->
            @if ($step['complete'])
                <!-- Complete Step -->
                <span class="flex items-center h-9">
                    <span class="relative z-10 flex items-center justify-center w-8 h-8 rounded-full bg-cyan-600 group-hover:bg-cyan-800">
                        <x-heroicon-s-check class="w-5 h-5 text-white" />
                    </span>
                </span>
                <span class="flex flex-col min-w-0 ml-4">
                    <span class="text-xs font-semibold tracking-wide text-gray-900 uppercase dark:text-gray-200">{{ $step['title'] }}</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $step['subtitle'] }}</span>
                </span>
            @elseif ($step['active'])
                <span class="flex items-center h-9" aria-hidden="true">
                    <span class="relative z-10 flex items-center justify-center w-8 h-8 bg-white border-2 rounded-full border-cyan-600">
                        <span class="h-2.5 w-2.5 bg-cyan-600 rounded-full"></span>
                    </span>
                </span>
                <span class="flex flex-col min-w-0 ml-4">
                    <span class="text-xs font-semibold tracking-wide uppercase text-cyan-600">{{ $step['title'] }}</span>
                    <span class="text-sm text-gray-500">{{ $step['subtitle'] }}</span>
                </span>
            @else
                <span class="flex items-center h-9" aria-hidden="true">
                    <span class="relative z-10 flex items-center justify-center w-8 h-8 bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                        <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
                    </span>
                </span>
                <span class="flex flex-col min-w-0 ml-4">
                    <span class="text-xs font-semibold tracking-wide text-gray-500 uppercase dark:text-gray-400">{{ $step['title'] }}</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $step['subtitle'] }}</span>
                </span>
            @endif
            </a>
        </li>
        @endforeach
    </ol>
</nav>
