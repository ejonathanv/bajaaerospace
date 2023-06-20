<div class="bg-white p-7 rounded shadow">
    <div class="flex items-center justify-between mb-5">
        <h3 class="!mb-0">
            Latest Posts
        </h3>

        <div class="ml-auto">
            <a href="{{ route('posts.index') }}" class="btn btn-primary">
                New Post
            </a>
        </div>
    </div>

    <p class="text-sm !m-0">
        Here you can manage the latest posts.
    </p>

    <hr class="my-5">

    @if(count($posts))
    <ul class="flex flex-col space-y-7">
        @foreach($posts as $post)
        <x-admin.post-list-item :post="$post"></x-admin.post-list-item>
        @endforeach
    </ul>
    @else
    <p class="text-sm !m-0">
        There are no posts yet.
    </p>
    @endif
</div>