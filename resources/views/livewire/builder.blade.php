<main>
    <x-header title="Builder" />
    <x-container class="space-y-4">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
            <div>
                <div class="sticky top-4 space-y-8">
                    <x-steps :steps="$steps" />

                    <div class="space-y-4">
                        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-100 leading-tight">{{ __('Preview') }}</h2>
                        <div class="w-64 h-64 rounded-lg overflow-hidden">
                            @include('livewire.builder.preview')
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2 space-y-4">
                @include('livewire.builder.background')

                @include('livewire.builder.icons')

                @include('livewire.builder.styling')

                @include('livewire.builder.download')
            </div>
        </div>
    </x-conteiner>
</main>
