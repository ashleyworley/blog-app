@props(['trigger'])
{{-- binding div to boolean in (posts-header line 22) --}}
<div x-data="{ show: false }" @click.away="show = false">

    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    {{-- Links --}}
    <div x-show="show" class="absolute z-50 w-full py-2 mt-2 overflow-auto bg-gray-100 rounded-xl max-h-52" style="display: none {{-- dont load unless dropdown is clicked --}}">
        {{ $slot }}
    </div>
</div>
