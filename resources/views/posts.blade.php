{{-- all posts page --}}

<x-layout>
    @include('posts-header')

    <main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">
        {{-- Most recent post --}}
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center"> No posts here yet. Check again later.</p>
        @endif
    </main>
</x-layout>
