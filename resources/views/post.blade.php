<x-layout>

<!DOCTYPE html>

<title>My Blog</title>

<link rel="stylesheet" href="/app.css">

<body>
   <article>
        <h1>{{ $post->title }}</h1>

        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

    <div>
        <p>{{ $post->body }}</p>
    </div>
    </p>
</article>

   <a href="/">Back to Homepage</a>
</body>
</x-layout>
