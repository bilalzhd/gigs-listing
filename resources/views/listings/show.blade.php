<x-layout>
@include('partials._search') 
<a href="/" class="inline-block text-black ml-4 mb-4">
    <i class="fa-solid fa-arrow-left"></i> 
    Back
</a>
<div class="mx-4">
<x-listing-card :listing="$listing" />
{{-- <x-card class="mt-4 p-2 flex space-x-6 items-center justify-center">
    <a href="/listings/{{$listing->id}}/edit"><i class="fa-solid fa-pencil mr-2"></i>Edit</a>
    <form method="POST" action="/listings/{{$listing->id}}">
        @csrf
        @method('DELETE')
        <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
    </form>
</x-card> --}}
</div>
</x-layout> 