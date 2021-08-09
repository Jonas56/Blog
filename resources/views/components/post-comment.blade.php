@props(['comment'])

<article class="flex bg-gray-100 border border-gray-300 p-6 rounded-xl space-x-4">
    <div class="flex-shrink">
        <img src="https://i.pravatar.cc/150?u={{ $comment->user_id }}" width="200" class="rounded-xl">
    </div>
    <div>
        <header>
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">
                Posted 
                <time>6 mounths ago</time>
            </p>
        </header>
        <p>{{ $comment->body }}</p>
    </div>
</article>


