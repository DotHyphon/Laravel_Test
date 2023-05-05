@props(['listing'])

<x-card class="p-6">
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$listing->logo ? asset('./storage/' . $listing->logo) : asset('images/no-image.png') }}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="./listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
            <ul class="flex">
                @foreach (explode(',', $listing->tags) as $tag)
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="/?tag={{$tag}}">{{ $tag }}</a>
                    </li>
                @endforeach
            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
