<x-layout>
    <article>

        <!-- Post Title -->
        <h1>{!! $post->title !!}</h1>

        <!-- By Author in Category -->
        <p>
            By <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <!-- Post Body -->
        <div>
            {!! $post->body !!}
        </div>
    </article>




    <!-- Link to home page -->
    <a href="/">Go Back</a>
</x-layout>
