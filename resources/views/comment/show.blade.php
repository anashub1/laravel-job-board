<x-layout :title="$pageTitle">
    <h2>Comment By {{$comments->author}}</h2>
    <p>{{$comments->content}}</p>

    @if($comments->post)
        <h3>related Post</h3>
        <ul>
            <li>
                <strong>{{$comments->post->title}}</strong>
                <p>{{$comments->post->body}}</p>
                <p>Author: {{$comments->post->author}}</p>
                <a href="{{ route('blog.show', $comments->post->id)}}">View Full Post</a>
            </li>
        </ul>
    @else
        <p>NO Related Post Found For This Comment </p>
    @endif
</x-layout>