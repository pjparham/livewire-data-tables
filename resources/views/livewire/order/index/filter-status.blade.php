<div>
    <x-radio-group wire:model.live="filters.status" class="grid grid-cols-4 gap-2">
        @foreach ($statuses as $status)
            <x-radio-group.option
                :value="$status['value']"
                class="px-3 py-2 flex flex-col rounded-xl border hover:border-blue-400 text-gray-700 cursor-pointer"
                class-checked="text-blue-600 border-2 border-blue-400"
                class-not-checked="text-gray-700"
            >
                <div class="text-sm font-normal">
                    <x-radio-group.label>{{ $status['label'] }}</x-radio-group.label>
                </div>

                <div class="text-lg font-semibold">{{ $status['count'] }}</div>
            </x-radio-group.option>
        @endforeach
    </x-radio-group>
</div>
