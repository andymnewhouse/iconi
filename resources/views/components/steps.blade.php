<nav aria-label="Progress">
    <ol role="list" class="overflow-hidden">
        @foreach($steps as $step)
        <li class="relative {{ $loop->last ? '' : 'pb-10' }}">
            @if(!$loop->last)
            <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full {{ $step['complete'] ? 'bg-indigo-600 dark:bg-indigo-400' : 'bg-gray-300 dark:bg-gray-700' }}" aria-hidden="true"></div>
            @endif

            <a href="{{ $step['link'] }}" class="relative flex items-start group"> <!-- If active aria-current="step" -->
            @if($step['complete'])
                <!-- Complete Step -->
                <span class="h-9 flex items-center">
                    <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-indigo-600 rounded-full group-hover:bg-indigo-800">
                        <x-heroicon-s-check class="w-5 h-5 text-white" />
                    </span>
                </span>
                <span class="ml-4 min-w-0 flex flex-col">
                    <span class="text-xs font-semibold text-gray-900 dark:text-gray-200 tracking-wide uppercase">{{ $step['title'] }}</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $step['subtitle'] }}</span>
                </span>
            @elseif($step['active'])
                <span class="h-9 flex items-center" aria-hidden="true">
                    <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-indigo-600 rounded-full">
                        <span class="h-2.5 w-2.5 bg-indigo-600 rounded-full"></span>
                    </span>
                </span>
                <span class="ml-4 min-w-0 flex flex-col">
                    <span class="text-xs font-semibold tracking-wide uppercase text-indigo-600">{{ $step['title'] }}</span>
                    <span class="text-sm text-gray-500">{{ $step['subtitle'] }}</span>
                </span>
            @else
                <span class="h-9 flex items-center" aria-hidden="true">
                    <span class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 border-gray-300 rounded-full group-hover:border-gray-400">
                        <span class="h-2.5 w-2.5 bg-transparent rounded-full group-hover:bg-gray-300"></span>
                    </span>
                </span>
                <span class="ml-4 min-w-0 flex flex-col">
                    <span class="text-xs font-semibold tracking-wide uppercase text-gray-500 dark:text-gray-400">{{ $step['title'] }}</span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">{{ $step['subtitle'] }}</span>
                </span>
            @endif
            </a>
        </li>
        @endforeach
    </ol>
</nav>
