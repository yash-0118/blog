<x-layout>

    @include('posts.header');


    <main class="max-w-6xl mx-auto mt-4 lg:mt-8 space-y-6">
        @if($posts->count())
        <x-feature-post-card :post='$posts[0]' />

        @if($posts->count()>1)

        <div class="lg:grid lg:grid-cols-2">
            @foreach ($posts->skip(1) as $post)
            <x-post-card :post='$post' />

            @endforeach
        </div>
        @endif
        {{$posts->links()}}

        @else
        <p class="text-center">No Posts yet</p>
        @endif


    </main>
</x-layout>