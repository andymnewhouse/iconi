<div class="pb-8 bg-gray-100 dark:bg-gray-900 sm:pb-12 lg:pb-12">
  <div class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
    <div class="max-w-md px-4 mx-auto sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
      <div>
        <x-jet-application-mark class="block w-auto h-11" />
        <div class="mt-10 space-y-4">
            @foreach ($rich_text as $item)
                @include('marketing.sets.'.$item['type'], $item)
            @endforeach
        </div>
      </div>
    </div>

    <div class="sm:mx-auto sm:max-w-3xl sm:px-6">
      <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <div class="hidden sm:block">
          <div class="absolute inset-y-0 w-screen left-1/2 bg-gray-50 dark:bg-gray-800 rounded-l-3xl lg:left-80 lg:right-0 lg:w-full"></div>
          <svg class="absolute -mr-3 top-8 right-1/2 lg:m-0 lg:left-0" width="404" height="392" fill="none" viewBox="0 0 404 392">
            <defs>
              <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-cyan-200 dark:text-cyan-700" fill="currentColor" />
              </pattern>
            </defs>
            <rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)" />
          </svg>
        </div>
        <div class="relative pl-4 -mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
          <img class="w-full rounded-md shadow-xl dark:hidden ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none" src="{{ $screenshot_light }}" alt="">
          <img class="hidden w-full rounded-md dark:block shadow-light-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none" src="{{ $screenshot_dark }}" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
