<link rel="stylesheet" href="/app.css">

    @foreach ($posts as $post)
    <body>
        <article>
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>

            <p>
                <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>
                <p>
                {{ $post->excerpt }}
                </p>
            </div>
        </article>
    </body>
   @endforeach
