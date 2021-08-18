@props(['posts'])


    <x-post-featured-card :post="$posts[0]" />
          {{-- don't render div if posts > 1 --}}
          @if($posts->count() > 1)
            <div class="lg:grid lg:grid-cols-6">
                {{-- Skip most recent post --}}
                @foreach ($posts->skip(1) as $post)
                {{-- first two posts span 3 columns, the rest 2 columns --}}
                    <x-post-card
                    :post="$post"
                    class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2' }}"
                    />
                @endforeach
            </div>
      @endif
