<x-layout :title="$pageTitle">
    <h2>{{$post->title}}</h2>
    <P>{{$post->body}}</P>
    <P>{{$post->author}}</P>
    <ul class="mt-6 space-y-4">
        @foreach ($post->comments as $comment)
            <li class="bg-gray-100 rounded-lg shadow-sm p-4 border border-gray-200">
                <p class="text-gray-800 font-medium">{{ $comment->content }}</p>
                <span class="text-sm text-gray-500">— {{ $comment->author }}</span>
            </li>
        @endforeach
    </ul>
    <div class="border border-gray-300 px-3 py-6 mt-2">
        <form action="/comments" method="POST" class="bg-white p-6 rounded-lg shadow-md space-y-4">
            @csrf
            <input type="hidden" name="post_id" value="{{$post->id}}">
            <!-- اسم صاحب التعليق -->
            <div class="space-y-6">
                <label for="author" class="block text-gray-700 font-medium mb-1">Your Name</label>
                <div>
                    <input type="text" id="author" name="author"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none {{$errors->has('author') ? 'outline-red-500' : 'outline-gray-500'}} "
                        placeholder="Enter your name" value="{{old('author')}}">
                </div>
                @error('author')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
            </div>

            <!-- نص التعليق -->
            <div>
                <label for="content" class="block text-gray-700 font-medium mb-1">Your Comment</label>
                <div>
                    <textarea id="content" name="content" rows="4"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none {{$errors->has('content') ? 'outline-red-500' : 'outline-gray-500'}}"
                        placeholder="Write your comment here..."></textarea>
                </div>
                @error('content')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                @enderror
            </div>

            <!-- زر الإرسال -->
            <div class="text-right">
                <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700 transition">
                    Add Comment
                </button>
            </div>
        </form>
    </div>
</x-layout>