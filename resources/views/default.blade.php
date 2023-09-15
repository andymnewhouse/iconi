<x-app-layout>
    @foreach ($page_builder as $section)
        @include('marketing.sections.' . $section['type'], $section)
    @endforeach
</x-app-layout>
