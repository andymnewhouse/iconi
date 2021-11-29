<main>
    <x-header title="Dashboard" />
    <x-container class="space-y-4">
        <x-bit.table>
            <x-slot name="head">
                <x-bit.table.heading>Filename</x-bit.table.heading>
                <x-bit.table.heading>Background</x-bit.table.heading>
                <x-bit.table.heading>Icon</x-bit.table.heading>
                <x-bit.table.heading></x-bit.table.heading>
            </x-slot>

            <x-slot name="body">
                @forelse($keyImages as $keyImage)
                <x-bit.table.row wire:key="row-{{ $keyImage->id }}">
                    <x-bit.table.cell>{{ $keyImage->filename }}</x-bit.table.cell>
                    <x-bit.table.cell><span class="block rounded w-4 h-4" style="background-color:{{ $keyImage->config['background']['color'] }}"></span></x-bit.table.cell>
                    <x-bit.table.cell><x-dynamic-component :component="$keyImage->config['icon']" class="w-h h-4" /></x-bit.table.cell>
                    <x-bit.table.cell class="text-right space-x-1">
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
