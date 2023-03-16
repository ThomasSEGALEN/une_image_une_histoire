<x-app-layout>
    <div class="flex flex-col md:grid grid-cols-8 grid-rows-8 gap-6 p-12">
        @foreach ($pictures as $index => $picture)
        @if ($index%7 === 0)
        <figure class="col-start-1 col-end-3 row-start-1 row-end-3">
            <img src="{{ asset('storage/'.$picture->path) }}" alt="{{ $picture->description }}"
                class="block w-full h-full object-cover">
        </figure>
        @endif
        @if ($index%7 === 1)
        <figure class="col-start-3 col-end-5 row-start-1 row-end-3">
            <img src="{{ asset('storage/'.$picture->path) }}" alt="{{ $picture->description }}"
                class="block w-full h-full object-cover">
        </figure>
        @endif
        @if ($index%7 === 2)
        <figure class="col-start-5 col-end-9 row-start-1 row-end-6">
            <img src="{{ asset('storage/'.$picture->path) }}" alt="{{ $picture->description }}"
                class="block w-full h-full object-cover">
        </figure>
        @endif
        @if ($index%7 === 3)
        <figure class="col-start-1 col-end-5 row-start-3 row-end-6">
            <img src="{{ asset('storage/'.$picture->path) }}" alt="{{ $picture->description }}"
                class="block w-full h-full object-cover">
        </figure>
        @endif
        @if ($index%7 === 4)
        <figure class="col-start-1 col-end-5 row-start-6 row-end-9">
            <img src="{{ asset('storage/'.$picture->path) }}" alt="{{ $picture->description }}"
                class="block w-full h-full object-cover">
        </figure>
        @endif
        @if ($index%7 === 5)
        <figure class="col-start-5 col-end-7 row-start-6 row-end-9">
            <img src="{{ asset('storage/'.$picture->path) }}" alt="{{ $picture->description }}"
                class="block w-full h-full object-cover">
        </figure>
        @endif
        @if ($index%7 === 6)
        <figure class="col-start-7 col-end-9 row-start-6 row-end-9">
            <img src="{{ asset('storage/'.$picture->path) }}" alt="{{ $picture->description }}"
                class="block w-full h-full object-cover">
        </figure>
        @endif
        @endforeach
    </div>
</x-app-layout>