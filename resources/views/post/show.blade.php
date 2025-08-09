<x-layout :title="$pageTitle">
    <h2 class="text-2xl">{{$post->title}}</h2>
    <P>{{$post->body}}</P>
    <P>{{$post->author}}</P>
    <ul>
        @foreach ($post->comments as $comment)

            <li>{{$comment->content }} , {{$comment->author}} </li>

        @endforeach
    </ul>
</x-layout>