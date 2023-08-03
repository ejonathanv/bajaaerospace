<h3>
    Recent posts
</h3>

<hr class="my-5">

<ul>
    @foreach($other_posts as $post)
    <li>
        <a href="{{ route('post', $post) }}" class="!block !mb-2">
            <p class="!mb-2">
                {{ $post->title }}
            </p>
        </a>
        <p class="font-bold text-sm text-gray-400">
            {{ \Carbon\Carbon::parse($post->date)->format('d M, Y') }}
        </p>
    </li>
    @endforeach
</ul>