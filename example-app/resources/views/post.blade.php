<x-layout>
    <article>
        <h1>{!! $post->title !!}</h1>
        <div>
            {!! $post->body !!}
        </div>
    </article>

    <!-- Link to home page -->
    <a href="/">Go Back</a>
</x-layout>
