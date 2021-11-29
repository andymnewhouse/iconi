<main>
    <x-header title="Dashboard" />
    <x-container class="space-y-4">
        <x-bit.table>
            <x-slot name="head">
                <x-bit.table.heading>Filename</x-bit.table.heading>
                <x-bit.table.heading>Background</x-bit.table.heading>
                <x-bit.table.heading>Icon</x-bit.table.heading>
                <x-bit.table.heading>Image</x-bit.table.heading>
                <x-bit.table.heading></x-bit.table.heading>
            </x-slot>

            <x-slot name="body">
                @forelse($keyImages as $keyImage)
                <x-bit.table.row wire:key="row-{{ $keyImage->id }}">
                    <x-bit.table.cell>{{ $keyImage->filename }}</x-bit.table.cell>
                    <x-bit.table.cell>
                        <span class="block w-4 h-4 rounded" style="background-color:{{ $keyImage->config['background']['color'] }}"></span>
                    </x-bit.table.cell>
                    <x-bit.table.cell>
                        <x-dynamic-component :component="$keyImage->config['icon']" class="h-4 w-h" />
                    </x-bit.table.cell>
                    <x-bit.table.cell class="flex items-center space-x-1">
                        @if($image = $keyImage->getFirstMediaUrl('key-image'))
                            <img src="{{ $image }}" loading="lazy" alt="{{ $keyImage->filename }}" class="w-4 h-4 rounded">
                            <button type="button" class="hover:underline" wire:click="generate({{ $keyImage->id }})">Regenerate</button>
                        @else
                        <button type="button" class="hover:underline" wire:click="generate({{ $keyImage->id }})">Generate</button>
                        @endif
                    </x-bit.table.cell>
                    <x-bit.table.cell class="space-x-1 text-right">
                        <button type="button" class="hover:underline" wire:click="duplicate({{ $keyImage->id }})">Duplicate</button>
                        <button type="button" class="hover:underline" wire:click="download({{ $keyImage->id }})">Download</button>
                        <button type="button" class="hover:underline" wire:click="edit({{ $keyImage->id }})">Edit</button>
                    </x-bit.table.cell>
                </x-bit.table.row>
                @empty
                <x-bit.table.row>
                    <x-bit.table.cell colspan="9">
                        <div class="flex items-center justify-center space-x-2">
                            <x-heroicon-o-users class="w-8 h-8 text-gray-400" />
                            <span class="py-8 text-xl font-medium text-gray-500 dark:text-gray-400 glacial">No key images found...</span>
                        </div>
                    </x-bit.table.cell>
                </x-bit.table.row>
                @endforelse
            </x-slot>
        </x-bit.table>
    </x-container>
</main>
