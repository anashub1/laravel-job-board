<x-layout :title="$pageTitle">
    <h2 class="text-3xl font-bold mb-6">Comments Exploring</h2>

    @forelse ($comments as $comment)
        <div class="mb-6 p-4 border rounded-lg shadow-sm bg-gray-50">
            <h1 class="text-2xl font-semibold text-gray-800 mb-2">
                {{ $comment->content }}
            </h1>
            <p class="text-gray-600 mb-1">
                <strong>Author:</strong> {{ $comment->author }}
            </p>
            <a href="/blog/{{ $comment->post->id }}" class="text-blue-500 hover:underline">
                View Post: {{ $comment->post->title }}
            </a>
        </div>
    @empty
        <p class="text-gray-500">No comments found.</p>
    @endforelse
</x-layout>