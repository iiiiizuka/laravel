<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <h1>Tags</h1>

        @foreach ($tags as $tag)
            <p>{{ $tag->name }}</p>
        @endforeach
    </div>
</div>
