<x-layout>
@include('partials._hero')
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
@unless(count($listings) == 0)

    @foreach($listings as $listing)
    <x-card>
        <div class="flex">
            <img
                class="hidden w-48 mr-6 md:block"
                src="{{$listing->logo ? asset('storage/'. $listing->logo) : asset('images/no-image.png')}}"
                alt=""
            />
            <div>
                <h3 class="text-2xl">
                    <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
                </h3>
                <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
              <x-listing-tags :tagsCsv="$listing->tags" />
                <div class="text-lg mt-4">
                    <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
                </div>
            </div>
        </div>
    </x-card>
        @endforeach
@else
<p>No listings found</p>
@endunless
</div>
<div class="mt-6 p-4">
    {{$listings->links()}}
</div>
</x-layout>