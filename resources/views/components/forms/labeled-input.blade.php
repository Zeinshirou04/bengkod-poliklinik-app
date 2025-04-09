<div class="flex flex-col w-full gap-3">
    <label for="{{ $name }}" class="font-semibold">{{ $label }}</label>
    @if ($type != 'option')
        <input type="{{ $type }}" name="{{ $name }}" class="px-2 py-2 border-1 border-gray-800 rounded-md"
            placeholder="{{ $placeholder }}">
    @elseif($type === 'option')
        <select name="{{ $name }}" class="px-2 py-2 border-1 border-gray-800 rounded-md">
            {{ $slot }}
        </select>
    @endif
</div>
