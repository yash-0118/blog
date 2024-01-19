@props(['trigger'])
<div x-data="{ show: false }" class="relative">
    <div @click="show=!show">
        {{$trigger}}
    </div>

    <div x-show="show" @click.away="show = false" class="py-2 absolute bg-gray-100  mt-2 w-full z-50 overflow-auto mah-h-50 rounded-xl">

        {{$slot}}

    </div>
</div>